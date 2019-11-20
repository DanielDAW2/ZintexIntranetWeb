<?php
namespace App\Controller\Api;

use App\Repository\TFraproformaRepository;
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
}


?>