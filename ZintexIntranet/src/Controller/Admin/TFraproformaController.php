<?php

namespace App\Controller\Admin;

use App\Entity\TFraproforma;
use App\Entity\TFraproformaAux;
use App\Entity\TFraproformaPlazos;
use App\Entity\TFraproformaVto;
use App\Form\TFraproformaType;
use App\Repository\TEmpresesRepository;
use App\Repository\TFraproformaRepository;
use App\Repository\TObservProformaRepository;
use App\Repository\TProductesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/t/fraproforma")
 */
class TFraproformaController extends AbstractController
{
    /**
     * @Route("/", name="t_fraproforma_index", methods={"GET"})
     */
    public function index(Request $req, TFraproformaRepository $proformaRepo): Response
    {
        $filters = [];
        $filters["page"] = $req->get("page") ? $req->get("page") : 1;
        $filters["date-from"] = $req->get("from") ? $req->get("from") : null;
        $filters["date-to"] = $req->get("to") ? $req->get("to") : null;
        $tFraproformasQuery = $proformaRepo
            ->getFraProformasPaginated($filters, $this->getParameter('limit'));
        $tFraproformas = $tFraproformasQuery['paginator'];
        $fraProformaQuery =  $tFraproformasQuery['query'];

        $maxPages = ceil($tFraproformasQuery['paginator']->count() / $this->getParameter('limit'));

        return $this->render('t_fraproforma/index.html.twig', array(
            't_fraproformas' => $tFraproformas,
            'maxPages' => $maxPages,
            'thisPage' => trim($filters["page"]),
            'all_items' => $fraProformaQuery
        ));
    }



    /**
     * @Route("/new", name="t_fraproforma_new", methods={"GET","POST"})
     */
    public function new(Request $request, TObservProformaRepository $obv, TProductesRepository $producte, TEmpresesRepository $empreseRepo): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $tFraproforma = new TFraproforma();
        $tFraproforma->addTFraproformaVto(new TFraproformaVto());
        $tFraproforma->setObservFraprof($obv->find(1)->getObservProforma());
        $tFraproforma->addTFraproformaPlazo(new TFraproformaPlazos($producte->find(241)));
        $tFraproforma->addTFraproformaPlazo(new TFraproformaPlazos($producte->find(240)));
        $tFraproforma->addTFraproformaPlazo(new TFraproformaPlazos($producte->find(239)));
        $tFraproforma->addTFraproformaPlazo(new TFraproformaPlazos($producte->find(296)));
        $form = $this->createForm(TFraproformaType::class, $tFraproforma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $client = $data->getClientFraprof();
            $marca = $client->getMarcaCli();
            $ultimaProforma = $empreseRepo->findOneBy(["marca"=>$marca]);
            $ultimaProforma->setNumProforma($ultimaProforma->getNumProforma()+ 1);

            $year = new \DateTime();
            $year = $year->format("y");
            $codigo = $marca." ".$year."_";
            dump($ultimaProforma->getNumProforma());
            $zeros = str_pad("0",4-count(strval($ultimaProforma->getNumProforma())),"0");
            $numFraProf = $codigo.$zeros.$ultimaProforma->getNumProforma()." P";
            $data->setNumFraprof($numFraProf);
            

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tFraproforma);
            $entityManager->persist($ultimaProforma);
            $entityManager->persist($data);
            $entityManager->flush();

            return $this->redirectToRoute('t_fraproforma_edit',["idFraprof"=>$data->getIdFraprof()]);
        }

        return $this->render('t_fraproforma/new.html.twig', [
            't_fraproforma' => $tFraproforma,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFraprof}", name="t_fraproforma_show", methods={"GET"})
     */
    public function show(TFraproforma $tFraproforma): Response
    {
        return $this->render('t_fraproforma/show.html.twig', [
            't_fraproforma' => $tFraproforma,
        ]);
    }

    /**
     * @Route("/{idFraprof}/edit", name="t_fraproforma_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TFraproforma $tFraproforma): Response
    {
        if ($tFraproforma->getTFraproformaAuxes()) {
            if (count($tFraproforma->getTFraproformaAuxes()) == 0) {

                $tFraproforma->addTFraproformaAux(new TFraproformaAux());
            }
        }
        $form = $this->createForm(TFraproformaType::class, $tFraproforma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_fraproforma_index');
        }

        return $this->render('t_fraproforma/edit.html.twig', [
            't_fraproforma' => $tFraproforma,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFraprof}", name="t_fraproforma_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TFraproforma $tFraproforma): Response
    {
        if ($this->isCsrfTokenValid('delete' . $tFraproforma->getIdFraprof(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tFraproforma);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_fraproforma_index');
    }

    /**
     * @Route("/download/pdf", name="t_fraproforma_download")
     */
    public function download(Request $req, TFraproformaRepository $proformaRepo)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $tFraproformasQuery = $proformaRepo
            ->getFraProformasPaginated($req->get("page") ? $req->get("page") : 1, $this->limitResults);
        $tFraproformas = $tFraproformasQuery['paginator'];
        $inmueblesQueryCompleta =  $tFraproformasQuery['query'];

        $maxPages = ceil($tFraproformasQuery['paginator']->count() / $this->limitResults);


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('t_fraproforma/index.html.twig', array(
            't_fraproformas' => $tFraproformas,
            'maxPages' => $maxPages,
            'thisPage' => $req->get("page"),
            'all_items' => $inmueblesQueryCompleta
        ));

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("proformas.pdf", [
            "Attachment" => true
        ]);
    }
}
