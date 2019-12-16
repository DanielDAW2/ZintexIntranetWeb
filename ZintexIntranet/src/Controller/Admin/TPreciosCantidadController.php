<?php

namespace App\Controller\Admin;

use App\Entity\TPreciosCantidad;
use App\Form\TPreciosCantidadType;
use App\Repository\TPreciosCantidadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/precios/cantidad")
 */
class TPreciosCantidadController extends AbstractController
{
    /**
     * @Route("/", name="t_precios_cantidad_index", methods={"GET"})
     */
    public function index(TPreciosCantidadRepository $tPreciosCantidadRepository): Response
    {
        return $this->render('t_precios_cantidad/index.html.twig', [
            't_precios_cantidads' => $tPreciosCantidadRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_precios_cantidad_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tPreciosCantidad = new TPreciosCantidad();
        $form = $this->createForm(TPreciosCantidadType::class, $tPreciosCantidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tPreciosCantidad);
            $entityManager->flush();

            return $this->redirectToRoute('t_precios_cantidad_index');
        }

        return $this->render('t_precios_cantidad/new.html.twig', [
            't_precios_cantidad' => $tPreciosCantidad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="t_precios_cantidad_show", methods={"GET"})
     */
    public function show(TPreciosCantidad $tPreciosCantidad): Response
    {
        return $this->render('t_precios_cantidad/show.html.twig', [
            't_precios_cantidad' => $tPreciosCantidad,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="t_precios_cantidad_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TPreciosCantidad $tPreciosCantidad): Response
    {
        $form = $this->createForm(TPreciosCantidadType::class, $tPreciosCantidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_precios_cantidad_index');
        }

        return $this->render('t_precios_cantidad/edit.html.twig', [
            't_precios_cantidad' => $tPreciosCantidad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="t_precios_cantidad_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TPreciosCantidad $tPreciosCantidad): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tPreciosCantidad->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tPreciosCantidad);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_precios_cantidad_index');
    }
}
