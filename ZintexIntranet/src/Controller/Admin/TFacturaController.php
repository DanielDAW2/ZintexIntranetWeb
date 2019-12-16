<?php

namespace App\Controller\Admin;

use App\Entity\TFactura;
use App\Form\TFacturaType;
use App\Repository\TFacturaRepository;
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
    public function index(TFacturaRepository $tFacturaRepository): Response
    {
        return $this->render('t_factura/index.html.twig', [
            't_facturas' => $tFacturaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_factura_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tFactura = new TFactura();
        $form = $this->createForm(TFacturaType::class, $tFactura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tFactura);
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
        if ($this->isCsrfTokenValid('delete'.$tFactura->getId_Factura(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tFactura);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_factura_index');
    }
}
