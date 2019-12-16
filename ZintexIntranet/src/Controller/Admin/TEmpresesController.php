<?php

namespace App\Controller\Admin;

use App\Entity\TEmpreses;
use App\Form\TEmpresesType;
use App\Repository\TEmpresesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/empreses")
 */
class TEmpresesController extends AbstractController
{
    /**
     * @Route("/", name="t_empreses_index", methods={"GET"})
     */
    public function index(TEmpresesRepository $tEmpresesRepository): Response
    {
        return $this->render('t_empreses/index.html.twig', [
            't_empreses' => $tEmpresesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_empreses_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tEmprese = new TEmpreses();
        $form = $this->createForm(TEmpresesType::class, $tEmprese);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tEmprese);
            $entityManager->flush();

            return $this->redirectToRoute('t_empreses_index');
        }

        return $this->render('t_empreses/new.html.twig', [
            't_emprese' => $tEmprese,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="t_empreses_show", methods={"GET"})
     */
    public function show(TEmpreses $tEmprese): Response
    {
        return $this->render('t_empreses/show.html.twig', [
            't_emprese' => $tEmprese,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="t_empreses_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TEmpreses $tEmprese): Response
    {
        $form = $this->createForm(TEmpresesType::class, $tEmprese);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_empreses_index');
        }

        return $this->render('t_empreses/edit.html.twig', [
            't_emprese' => $tEmprese,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="t_empreses_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TEmpreses $tEmprese): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tEmprese->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tEmprese);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_empreses_index');
    }
}
