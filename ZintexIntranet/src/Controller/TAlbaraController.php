<?php

namespace App\Controller;

use App\Entity\TAlbara;
use App\Form\TAlbaraType;
use App\Repository\TAlbaraRepository;
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
    public function index(TAlbaraRepository $tAlbaraRepository): Response
    {
        return $this->render('t_albara/index.html.twig', [
            't_albaras' => $tAlbaraRepository->findAll(),
        ]);
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
}
