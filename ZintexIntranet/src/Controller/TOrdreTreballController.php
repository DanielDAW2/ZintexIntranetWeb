<?php

namespace App\Controller;

use App\Entity\TOrdreTreball;
use App\Form\TOrdreTreballType;
use App\Repository\TOrdreTreballRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/ordre/treball")
 */
class TOrdreTreballController extends AbstractController
{
    /**
     * @Route("/", name="t_ordre_treball_index", methods={"GET"})
     */
    public function index(TOrdreTreballRepository $tOrdreTreballRepository): Response
    {
        return $this->render('t_ordre_treball/index.html.twig', [
            't_ordre_treballs' => $tOrdreTreballRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_ordre_treball_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tOrdreTreball = new TOrdreTreball();
        $form = $this->createForm(TOrdreTreballType::class, $tOrdreTreball);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tOrdreTreball);
            $entityManager->flush();

            return $this->redirectToRoute('t_ordre_treball_index');
        }

        return $this->render('t_ordre_treball/new.html.twig', [
            't_ordre_treball' => $tOrdreTreball,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idOrdre}", name="t_ordre_treball_show", methods={"GET"})
     */
    public function show(TOrdreTreball $tOrdreTreball): Response
    {
        return $this->render('t_ordre_treball/show.html.twig', [
            't_ordre_treball' => $tOrdreTreball,
        ]);
    }

    /**
     * @Route("/{idOrdre}/edit", name="t_ordre_treball_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TOrdreTreball $tOrdreTreball): Response
    {
        $form = $this->createForm(TOrdreTreballType::class, $tOrdreTreball);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_ordre_treball_index');
        }

        return $this->render('t_ordre_treball/edit.html.twig', [
            't_ordre_treball' => $tOrdreTreball,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idOrdre}", name="t_ordre_treball_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TOrdreTreball $tOrdreTreball): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tOrdreTreball->getIdOrdre(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tOrdreTreball);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_ordre_treball_index');
    }
}
