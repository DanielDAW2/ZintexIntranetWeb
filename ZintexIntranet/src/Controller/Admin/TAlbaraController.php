<?php

namespace App\Controller\Admin;

use App\Entity\TAlbara;
use App\Entity\TAlbaraAux;
use App\Entity\TFraproforma;
use App\Form\TAlbaraType;
use App\Repository\TAlbaraRepository;
use App\Repository\TEmpresesRepository;
use App\Repository\TPaisosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/albara")
 */
class TAlbaraController extends AbstractController
{
    /**
     * @Route("/", name="t_albara_index", methods={"GET"})
     */
    public function index(TAlbaraRepository $tAlbaraRepository, Request $req): Response
    {
        $filters = [];
        $filters["page"]= $req->get("page") ? $req->get("page") : 1;
        $albaraQuery = $tAlbaraRepository->getAlbaraPaginated($filters,$this->getParameter("limit"));
        $albara = $albaraQuery['paginator'];
        $allitems =  $albaraQuery['query'];
        $maxPages = ceil($albaraQuery['paginator']->count() / $this->getParameter('limit'));
        return $this->render('t_albara/index.html.twig', array(
                't_albaras' => $albara,
                'maxPages'=>$maxPages,
                'thisPage' => $req->get("page"),
                'all_items' => $allitems
            ) );
    }

    /**
     * @Route("/new", name="t_albara_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tAlbara = new TAlbara();
        $form = $this->createForm(TAlbaraType::class, $tAlbara);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tAlbara);
            $entityManager->flush();

            return $this->redirectToRoute('t_albara_index');
        }

        return $this->render('t_albara/new.html.twig', [
            't_albara' => $tAlbara,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAlbara}", name="t_albara_show", methods={"GET"})
     */
    public function show(TAlbara $tAlbara): Response
    {
        return $this->render('t_albara/show.html.twig', [
            't_albara' => $tAlbara,
        ]);
    }

    

    /**
     * @Route("/{idAlbara}/edit", name="t_albara_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TAlbara $tAlbara): Response
    {
        $form = $this->createForm(TAlbaraType::class, $tAlbara);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_albara_index');
        }

        return $this->render('t_albara/edit.html.twig', [
            't_albara' => $tAlbara,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAlbara}", name="t_albara_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TAlbara $tAlbara): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tAlbara->getIdAlbara(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tAlbara);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_albara_index');
    }

    /**
     * @Route("/proformaToAlbara/{proforma}", name="t_albara_proforma")
     */
    public function proformaToAlbara(TFraproforma $proforma, TPaisosRepository $paisos, TEmpresesRepository $repoEmpreses, EntityManagerInterface $em)
    {
        $albara = new TAlbara();
        $client = $proforma->getClientFraprof();
        $albara->setNomClientAlbara($proforma->getClientFraprof()->getClient());
        $albara->setClientAlbara($proforma->getClientFraprof());
        $marca = $proforma->getClientFraprof()->getMarcaCli();
        $ultimAlbara = $repoEmpreses->findOneBy(["marca"=>$marca]);
        $ultimAlbara->setNumAlbara($ultimAlbara->getNumAlbara()+1);
        
        $year = new \DateTime();
        $year = $year->format("y");
        $codigo = $marca." ".$year."_";
        $zeros = str_pad("0",4-count($ultimAlbara->getNumAlbara()),"0");

        $numAlbara = $codigo.$zeros.$ultimAlbara->getNumAlbara();
        $albara->setNumAlbara($numAlbara);
        $albara->setNumfraproformaAlbara($proforma->getNumFraprof());
        $albara->setFacturableAlbara(true);
        $albara->setNrefAlbara($proforma->getNumFraprof());
        $albara->setSrefAlbara($proforma->getSref());
        $albara->setDescripClientAlbara($client->getNomfraCli());
        if($client->getPaisfraCli()->getIdPais() == 74)
        {
            $pais = "";
        }
        else{
            $pais = $client->getPaisfraCli()->getPais();
        }
        $albara->setDireccioClientAlbara($client->getDirfraCli()." ".$client->getCodpfraCli()." ".$client->getPobfraCli(). " ".$pais);
        $proforma->setRefAlbara($albara->getNumAlbara());

        foreach( $proforma->getTFraproformaAuxes() as $auxProforma)
        {
            $auxAlbara = new TAlbaraAux();
            $auxAlbara->setCodprodAlbara($auxProforma->getCodprodProforma());
            if($auxAlbara->getCodprodAlbara()->getIdProd()== 243)
            {
            }else{
                $auxAlbara->setDescripprodAlbara($auxAlbara->getCodprodAlbara()->getDescripal());
            }
            $auxAlbara->setNumAlbara($albara);
            $auxAlbara->setNumLinia($auxProforma->getNumLinia());
            $auxAlbara->setPreuAlbara($auxProforma->getPreuProforma());
            $auxAlbara->setNumunitAlbara($auxProforma->getNumunitProforma());
            $auxAlbara->setDescripprodAlbara($auxProforma->getDescripprodProforma());
            $auxAlbara->setPreuunitAlbara($auxProforma->getPreuunitProforma());
            $auxAlbara->setCodparamimpAlbara($auxProforma->getCodparamimpProforma()->getIdParamimp());
            $albara->addTAlbaraAux($auxAlbara);
        }
        $em->persist($albara);
        $em->persist($proforma);
        $em->persist($ultimAlbara);
        $em->flush();

        return $this->redirectToRoute("t_albara_edit",["idAlbara"=>$albara->getIdAlbara()]);
    }
}
