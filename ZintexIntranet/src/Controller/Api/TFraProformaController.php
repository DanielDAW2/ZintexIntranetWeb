<?php
namespace App\Controller\Api;

use App\Entity\TFraproforma;
use App\Entity\TOrdreTreball;
use App\Entity\TOrdreTreballAux;
use App\Repository\TFraproformaRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/fraproformas")
 */
class TFraProformaController extends AbstractController {

    /**
     * @Route("/get_numprof", name="t_fraproformas_numprof")
     */
    public function getNumproforma(TFraproformaRepository $repo, Request $req) : JsonResponse {
        
        $findedNumProf = $repo->findNumProformas($req->get("numProf"));

        $numProf = array_map(function($prof){
            return $prof;
        }, $findedNumProf);

        return new JsonResponse(["results"=>$numProf],200);

    }


    /**
     * Undocumented function
     *
     * @param TFraproforma $proforma
     * @return void
     * 
     * @Route("/get_lineas_sense_ordres/{idFraprof}", name="t_proformas_getlineas_sense_ordre")
     */
    public function getLineasSenseOrdre(TFraproforma $proforma)
    {
        $ordenes = [];
        $productes = [];
        $orden = new TOrdreTreball();
        $em = $this->getDoctrine()->getManager();
        $orden->setNumFraproforma($proforma);
        $orden->setNomClient($proforma->getClientFraprof()->getNomfraCli());
        foreach ($proforma->getTFraproformaAuxes() as $value) {
            if(count($value->getTOrdreTreballAuxes()) === 0)
            {
                $productes[] = $value->getCodprodProforma()->getNomProdCurt();
                $ordenAux = new TOrdreTreballAux();
                $ordenAux->setCodprodOrdreTreball($value->getCodprodProforma());
                $ordenAux->setGrupProducte($value->getGrupProducte());
                $orden->addTOrdreTreballAux($ordenAux);
                $em->persist($orden);
            }
            
        }
        $em->flush();

       
        
        
        $ordenes["productes"] = $productes;
        $ordenes["fecha"] = date_format(new DateTime(), "d-m-Y");
        $ordenes["orden"] = ["num"=>$orden->getIdOrdre()];

            return new JsonResponse($ordenes);


    }
}


?>