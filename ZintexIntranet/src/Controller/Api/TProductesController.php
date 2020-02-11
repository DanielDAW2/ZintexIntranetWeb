<?php
namespace App\Controller\Api;

use App\Repository\TProductesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/productes")
 */
class TProductesController extends AbstractController {

    /**
     * @Route("/get_nomprod", name="t_productes_get_nomprod")
     */
    public function getNomProducte(TProductesRepository $repo, Request $req) : JsonResponse {
        
        $findedProd = $repo->findProduct($req->get("prod"));

        $productes = array_map(function($prof){
            return $prof;
        }, $findedProd);
        

        return new JsonResponse(["results"=>$productes],200);

    }

}


?>