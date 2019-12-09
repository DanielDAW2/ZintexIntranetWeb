<?php

namespace App\Controller;

use App\Entity\TClients;
use App\Form\TClientsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/clients")
 */
class TClientsController extends AbstractController
{
    /**
     * @Route("/", name="t_clients_index", methods={"GET"})
     */
    public function index(Request $req): Response
    {
        $tclientsQuery = $this->getDoctrine()
            ->getRepository(TClients::class)
            ->getClientsPaginated($req->get("page") ? $req->get("page"): 1, $this->getParameter('limit'));
            $tclients = $tclientsQuery['paginator'];
            $allitems =  $tclientsQuery['query'];
          
            $maxPages = ceil($tclientsQuery['paginator']->count() / $this->getParameter('limit'));
          
            return $this->render('t_clients/index.html.twig', array(
                  't_clients' => $tclients,
                  'maxPages'=>$maxPages,
                  'thisPage' => $req->get("page"),
                  'all_items' => $allitems
              ) );
          
          
            return $this->render('t_clients/index.html.twig', array(
                  't_clients' => $tclients,
                  'thisPage' => $req->get("page"),
              ) );
          }
    

    /**
     * @Route("/new", name="t_clients_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tClient = new TClients();
        $form = $this->createForm(TClientsType::class, $tClient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tClient);
            $entityManager->flush();

            return $this->redirectToRoute('t_clients_index');
        }

        return $this->render('t_clients/new.html.twig', [
            't_client' => $tClient,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCli}", name="t_clients_show", methods={"GET"})
     */
    public function show(TClients $tClient): Response
    {
        return $this->render('t_clients/show.html.twig', [
            't_client' => $tClient,
        ]);
    }

    /**
     * @Route("/{idCli}/edit", name="t_clients_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TClients $tClient): Response
    {
        $form = $this->createForm(TClientsType::class, $tClient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_clients_index');
        }

        return $this->render('t_clients/edit.html.twig', [
            't_client' => $tClient,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCli}", name="t_clients_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TClients $tClient): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tClient->getIdCli(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tClient);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_clients_index');
    }
}
