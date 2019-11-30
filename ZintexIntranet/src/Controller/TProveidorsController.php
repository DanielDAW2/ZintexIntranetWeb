<?php

namespace App\Controller;

use App\Entity\TProveidors;
use App\Form\TProveidorsType;
use App\Repository\TProveidorsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/proveidors")
 */
class TProveidorsController extends AbstractController
{
    /**
     * @Route("/", name="t_proveidors_index", methods={"GET"})
     */
    public function index(TProveidorsRepository $tProveidorsRepository): Response
    {
        return $this->render('t_proveidors/index.html.twig', [
            't_proveidors' => $tProveidorsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_proveidors_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tProveidor = new TProveidors();
        $form = $this->createForm(TProveidorsType::class, $tProveidor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tProveidor);
            $entityManager->flush();

            return $this->redirectToRoute('t_proveidors_index');
        }

        return $this->render('t_proveidors/new.html.twig', [
            't_proveidor' => $tProveidor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idProv}", name="t_proveidors_show", methods={"GET"})
     */
    public function show(TProveidors $tProveidor): Response
    {
        return $this->render('t_proveidors/show.html.twig', [
            't_proveidor' => $tProveidor,
        ]);
    }

    /**
     * @Route("/{idProv}/edit", name="t_proveidors_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TProveidors $tProveidor): Response
    {
        $form = $this->createForm(TProveidorsType::class, $tProveidor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_proveidors_index');
        }

        return $this->render('t_proveidors/edit.html.twig', [
            't_proveidor' => $tProveidor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idProv}", name="t_proveidors_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TProveidors $tProveidor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tProveidor->getIdProv(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tProveidor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_proveidors_index');
    }
}
