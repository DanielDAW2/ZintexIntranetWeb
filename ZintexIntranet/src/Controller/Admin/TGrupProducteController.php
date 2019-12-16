<?php

namespace App\Controller\Admin;

use App\Entity\TGrupProducte;
use App\Form\TGrupProducteType;
use App\Repository\TGrupProducteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/grup/producte")
 */
class TGrupProducteController extends AbstractController
{
    /**
     * @Route("/", name="t_grup_producte_index", methods={"GET"})
     */
    public function index(TGrupProducteRepository $tGrupProducteRepository): Response
    {
        return $this->render('t_grup_producte/index.html.twig', [
            't_grup_productes' => $tGrupProducteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_grup_producte_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tGrupProducte = new TGrupProducte();
        $form = $this->createForm(TGrupProducteType::class, $tGrupProducte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tGrupProducte);
            $entityManager->flush();

            return $this->redirectToRoute('t_grup_producte_index');
        }

        return $this->render('t_grup_producte/new.html.twig', [
            't_grup_producte' => $tGrupProducte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idGrupproducte}", name="t_grup_producte_show", methods={"GET"})
     */
    public function show(TGrupProducte $tGrupProducte): Response
    {
        return $this->render('t_grup_producte/show.html.twig', [
            't_grup_producte' => $tGrupProducte,
        ]);
    }

    /**
     * @Route("/{idGrupproducte}/edit", name="t_grup_producte_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TGrupProducte $tGrupProducte): Response
    {
        $form = $this->createForm(TGrupProducteType::class, $tGrupProducte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_grup_producte_index');
        }

        return $this->render('t_grup_producte/edit.html.twig', [
            't_grup_producte' => $tGrupProducte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idGrupproducte}", name="t_grup_producte_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TGrupProducte $tGrupProducte): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tGrupProducte->getIdGrupproducte(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tGrupProducte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_grup_producte_index');
    }
}
