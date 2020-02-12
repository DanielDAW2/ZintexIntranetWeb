<?php

namespace App\Controller\Admin;

use App\Entity\TFactura;
use App\Form\TFacturaType;
use App\Repository\TEmpresesRepository;
use App\Repository\TFacturaRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/factura")
 */
class TFacturaController extends AbstractController
{
    /**
     * @Route("/", name="t_factura_index", methods={"GET"})
     */
    public function index(TFacturaRepository $tFacturaRepository, Request $req): Response
    {
        $filters = [];
        $filters["page"] = $req->get("page") ? $req->get("page") : 1;
        $filters["date-from"] = $req->get("from") ? $req->get("from") : null;
        $filters["date-to"] = $req->get("to") ? $req->get("to") : null;
        $FacturasQuery = $tFacturaRepository
            ->getFacturasPaginated($filters, $this->getParameter('limit'));
        $tFacturas = $FacturasQuery['paginator'];


        $maxPages = ceil($FacturasQuery['paginator']->count() / $this->getParameter('limit'));

        return $this->render('t_factura/index.html.twig', array(
            't_facturas' => $tFacturas,
            'maxPages' => $maxPages,
            'thisPage' => trim($filters["page"]),
            'all_items' => $FacturasQuery['query']
        ));
    }

    /**
     * @Route("/new", name="t_factura_new", methods={"GET","POST"})
     */
    public function new(Request $request, TEmpresesRepository $empreseRepo): Response
    {
        $tFactura = new TFactura();
        $tFactura->setDataFactura(new DateTime());
        $form = $this->createForm(TFacturaType::class, $tFactura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tFactura);
            $client = $data->getClientFactura();
            $marca = $client->getMarcaCli();
            $ultimaFactura = $empreseRepo->findOneBy(["marca" => $marca]);
            $ultimaFactura->setNumProforma($ultimaFactura->getNumFra() + 1);

            $year = new \DateTime();
            $year = $year->format("y");
            $codigo = $marca . " " . $year . "_";
            $zeros = str_pad("0", 4 - strlen($ultimaFactura->getNumFra()), "0");
            $numFraProf = $codigo . $zeros . $ultimaFactura->getNumFra() . " F";
            $data->setNumFactura($numFraProf);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ultimaFactura);
            $entityManager->persist($data);
            $entityManager->flush();

            return $this->redirectToRoute('t_factura_index');
        }

        return $this->render('t_factura/new.html.twig', [
            't_factura' => $tFactura,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{Id_Factura}", name="t_factura_show", methods={"GET"})
     */
    public function show(TFactura $tFactura): Response
    {
        return $this->render('t_factura/show.html.twig', [
            't_factura' => $tFactura,
        ]);
    }

    /**
     * @Route("/{Id_Factura}/edit", name="t_factura_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TFactura $tFactura): Response
    {
        $form = $this->createForm(TFacturaType::class, $tFactura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_factura_index');
        }

        return $this->render('t_factura/edit.html.twig', [
            't_factura' => $tFactura,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{Id_Factura}", name="t_factura_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TFactura $tFactura): Response
    {
        if ($this->isCsrfTokenValid('delete' . $tFactura->getId_Factura(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tFactura);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_factura_index');
    }
}
