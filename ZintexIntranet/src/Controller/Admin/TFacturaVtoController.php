<?php

namespace App\Controller\Admin;

use App\Entity\TFacturaVto;
use App\Form\TFacturaVtoType;
use App\Repository\TFacturaVtoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/facturavto")
 */
class TFacturaVtoController extends AbstractController
{
    /**
     * @Route("/", name="t_factura_vto_index", methods={"GET"})
     */
    public function index(TFacturaVtoRepository $tFacturaVtoRepository): Response
    {
        return $this->render('t_factura_vto/index.html.twig', [
            't_factura_vtos' => $tFacturaVtoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_factura_vto_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tFacturaVto = new TFacturaVto();
        $form = $this->createForm(TFacturaVtoType::class, $tFacturaVto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tFacturaVto);
            $entityManager->flush();

            return $this->redirectToRoute('t_factura_vto_index');
        }

        return $this->render('t_factura_vto/new.html.twig', [
            't_factura_vto' => $tFacturaVto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFacturaVto}", name="t_factura_vto_show", methods={"GET"})
     */
    public function show(TFacturaVto $tFacturaVto): Response
    {
        return $this->render('t_factura_vto/show.html.twig', [
            't_factura_vto' => $tFacturaVto,
        ]);
    }

    /**
     * @Route("/{idFacturaVto}/edit", name="t_factura_vto_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TFacturaVto $tFacturaVto): Response
    {
        $form = $this->createForm(TFacturaVtoType::class, $tFacturaVto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_factura_vto_index');
        }

        return $this->render('t_factura_vto/edit.html.twig', [
            't_factura_vto' => $tFacturaVto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFacturaVto}", name="t_factura_vto_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TFacturaVto $tFacturaVto): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tFacturaVto->getIdFacturaVto(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tFacturaVto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_factura_vto_index');
    }
}
