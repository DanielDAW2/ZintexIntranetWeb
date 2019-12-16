<?php

namespace App\Controller;

use App\Entity\TComercials;
use App\Form\TComercialsType;
use App\Repository\TComercialsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/comercials")
 */
class TComercialsController extends AbstractController
{
    /**
     * @Route("/", name="t_comercials_index", methods={"GET"})
     */
    public function index(TComercialsRepository $tComercialsRepository): Response
    {
        return $this->render('t_comercials/index.html.twig', [
            't_comercials' => $tComercialsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_comercials_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tComercial = new TComercials();
        $form = $this->createForm(TComercialsType::class, $tComercial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tComercial);
            $entityManager->flush();

            return $this->redirectToRoute('t_comercials_index');
        }

        return $this->render('t_comercials/new.html.twig', [
            't_comercial' => $tComercial,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idComercial}", name="t_comercials_show", methods={"GET"})
     */
    public function show(TComercials $tComercial): Response
    {
        return $this->render('t_comercials/show.html.twig', [
            't_comercial' => $tComercial,
        ]);
    }

    /**
     * @Route("/{idComercial}/edit", name="t_comercials_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TComercials $tComercial): Response
    {
        $form = $this->createForm(TComercialsType::class, $tComercial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_comercials_index');
        }

        return $this->render('t_comercials/edit.html.twig', [
            't_comercial' => $tComercial,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idComercial}", name="t_comercials_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TComercials $tComercial): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tComercial->getIdComercial(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tComercial);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_comercials_index');
    }
}
