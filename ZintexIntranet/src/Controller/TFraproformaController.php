<?php

namespace App\Controller;

use App\Entity\TFraproforma;
use App\Entity\TFraproformaAux;
use App\Form\TFraproformaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/fraproforma")
 */
class TFraproformaController extends AbstractController
{
    /**
     * @Route("/", name="t_fraproforma_index", methods={"GET"})
     */
    public function index(Request $req): Response
    {
        $tFraproformasQuery = $this->getDoctrine()
            ->getRepository(TFraproforma::class)
            ->getFraProformasPaginated($req->get("page") ? $req->get("page"): 1);
            $tFraproformas = $tFraproformasQuery['paginator'];
            $inmueblesQueryCompleta =  $tFraproformasQuery['query'];
          
            $maxPages = ceil($tFraproformasQuery['paginator']->count() / $this->limitResults);
          
            return $this->render('t_fraproforma/index.html.twig', array(
                  't_fraproformas' => $tFraproformas,
                  'maxPages'=>$maxPages,
                  'thisPage' => $req->get("page"),
                  'all_items' => $inmueblesQueryCompleta
              ) );
          }

    

    /**
     * @Route("/new", name="t_fraproforma_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tFraproforma = new TFraproforma();
        $tFraproforma->addTFraproformaAux(new TFraproformaAux());
        $form = $this->createForm(TFraproformaType::class, $tFraproforma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tFraproforma);
            $entityManager->flush();

            return $this->redirectToRoute('t_fraproforma_index');
        }

        return $this->render('t_fraproforma/new.html.twig', [
            't_fraproforma' => $tFraproforma,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFraprof}", name="t_fraproforma_show", methods={"GET"})
     */
    public function show(TFraproforma $tFraproforma): Response
    {
        return $this->render('t_fraproforma/show.html.twig', [
            't_fraproforma' => $tFraproforma,
        ]);
    }

    /**
     * @Route("/{idFraprof}/edit", name="t_fraproforma_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TFraproforma $tFraproforma): Response
    {
        $form = $this->createForm(TFraproformaType::class, $tFraproforma);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_fraproforma_index');
        }

        return $this->render('t_fraproforma/edit.html.twig', [
            't_fraproforma' => $tFraproforma,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFraprof}", name="t_fraproforma_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TFraproforma $tFraproforma): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tFraproforma->getIdFraprof(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tFraproforma);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_fraproforma_index');
    }
}
