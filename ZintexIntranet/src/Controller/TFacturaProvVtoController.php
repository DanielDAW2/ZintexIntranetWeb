<?php

namespace App\Controller;

use App\Entity\TFacturaProvVto;
use App\Form\TFacturaProvVtoType;
use App\Repository\TFacturaProvVtoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/facturaprovvto")
 */
class TFacturaProvVtoController extends AbstractController
{
    /**
     * @Route("/", name="t_factura_prov_vto_index", methods={"GET"})
     */
    public function index(TFacturaProvVtoRepository $tFacturaProvVtoRepository): Response
    {
        return $this->render('t_factura_prov_vto/index.html.twig', [
            't_factura_prov_vtos' => $tFacturaProvVtoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_factura_prov_vto_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tFacturaProvVto = new TFacturaProvVto();
        $form = $this->createForm(TFacturaProvVtoType::class, $tFacturaProvVto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tFacturaProvVto);
            $entityManager->flush();

            return $this->redirectToRoute('t_factura_prov_vto_index');
        }

        return $this->render('t_factura_prov_vto/new.html.twig', [
            't_factura_prov_vto' => $tFacturaProvVto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFacturaProvVto}", name="t_factura_prov_vto_show", methods={"GET"})
     */
    public function show(TFacturaProvVto $tFacturaProvVto): Response
    {
        return $this->render('t_factura_prov_vto/show.html.twig', [
            't_factura_prov_vto' => $tFacturaProvVto,
        ]);
    }

    /**
     * @Route("/{idFacturaProvVto}/edit", name="t_factura_prov_vto_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TFacturaProvVto $tFacturaProvVto): Response
    {
        $form = $this->createForm(TFacturaProvVtoType::class, $tFacturaProvVto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_factura_prov_vto_index');
        }

        return $this->render('t_factura_prov_vto/edit.html.twig', [
            't_factura_prov_vto' => $tFacturaProvVto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFacturaProvVto}", name="t_factura_prov_vto_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TFacturaProvVto $tFacturaProvVto): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tFacturaProvVto->getIdFacturaProvVto(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tFacturaProvVto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_factura_prov_vto_index');
    }
}
