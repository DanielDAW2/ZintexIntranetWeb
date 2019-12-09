<?php

namespace App\Controller;

use App\Entity\TClients;
use App\Entity\TProductes;
use App\Form\TProductesType;
use App\Repository\TProductesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/productes")
 */
class TProductesController extends AbstractController
{
    /**
     * @Route("/", name="t_productes_index", methods={"GET"})
     */
    public function index(Request $req, TProductesRepository $tProductesRepository): Response
    {

        $tProductesQuery = $this->getDoctrine()
            ->getRepository(TProductes::class)
            ->getProductesPaginated($req->get("page") ? $req->get("page"): 1, $this->getParameter('limit'));
            $tProductes = $tProductesQuery['paginator'];
            $allItems =  $tProductesQuery['query'];
          
            $maxPages = ceil($tProductesQuery['paginator']->count() / $this->getParameter('limit'));
          
            return $this->render('t_productes/index.html.twig', array(
                  't_productes' => $tProductes,
                  'maxPages'=>$maxPages,
                  'thisPage' => $req->get("page"),
                  'all_items' => $allItems
              ) );

    }

    /**
     * @Route("/new", name="t_productes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tProducte = new TProductes();
        $form = $this->createForm(TProductesType::class, $tProducte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tProducte);
            $entityManager->flush();

            return $this->redirectToRoute('t_productes_index');
        }

        return $this->render('t_productes/new.html.twig', [
            't_producte' => $tProducte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idProd}", name="t_productes_show", methods={"GET"})
     */
    public function show(TProductes $tProducte): Response
    {
        return $this->render('t_productes/show.html.twig', [
            't_producte' => $tProducte,
        ]);
    }

    /**
     * @Route("/{idProd}/edit", name="t_productes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TProductes $tProducte): Response
    {
        $form = $this->createForm(TProductesType::class, $tProducte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_productes_index');
        }

        return $this->render('t_productes/edit.html.twig', [
            't_producte' => $tProducte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idProd}", name="t_productes_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TProductes $tProducte): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tProducte->getIdProd(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tProducte);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_productes_index');
    }
}
