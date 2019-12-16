<?php

namespace App\Controller\Admin;

use App\Entity\TFacturaProv;
use App\Form\TFacturaProvType;
use App\Repository\TFacturaProvRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/facturaprov")
 */
class TFacturaProvController extends AbstractController
{
    /**
     * @Route("/", name="t_factura_prov_index", methods={"GET"})
     */
    public function index(TFacturaProvRepository $tFacturaProvRepository): Response
    {
        return $this->render('t_factura_prov/index.html.twig', [
            't_factura_provs' => $tFacturaProvRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="t_factura_prov_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tFacturaProv = new TFacturaProv();
        $form = $this->createForm(TFacturaProvType::class, $tFacturaProv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tFacturaProv);
            $entityManager->flush();

            return $this->redirectToRoute('t_factura_prov_index');
        }

        return $this->render('t_factura_prov/new.html.twig', [
            't_factura_prov' => $tFacturaProv,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFacturaProv}", name="t_factura_prov_show", methods={"GET"})
     */
    public function show(TFacturaProv $tFacturaProv): Response
    {
        return $this->render('t_factura_prov/show.html.twig', [
            't_factura_prov' => $tFacturaProv,
        ]);
    }

    /**
     * @Route("/{idFacturaProv}/edit", name="t_factura_prov_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TFacturaProv $tFacturaProv): Response
    {
        $form = $this->createForm(TFacturaProvType::class, $tFacturaProv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_factura_prov_index');
        }

        return $this->render('t_factura_prov/edit.html.twig', [
            't_factura_prov' => $tFacturaProv,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFacturaProv}", name="t_factura_prov_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TFacturaProv $tFacturaProv): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tFacturaProv->getIdFacturaProv(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tFacturaProv);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_factura_prov_index');
    }
}
