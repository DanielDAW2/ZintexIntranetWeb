<?php
namespace App\Controller\Api;

use App\Repository\TPreciosCantidadRepository;
use App\Repository\TProductesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/productes")
 */
class TPreciosCantidadController extends AbstractController {

    /**
     * @Route("/get_prod_price", name="t_precios_cantidad_get")
     */
    public function getNomProducte(TPreciosCantidadRepository $repoPrecios, TProductesRepository $prodRepo, Request $req) : JsonResponse {
        
        $findedProd = $prodRepo->find($req->get("nomProd"));
        $cantidad = $req->get("cantidad");
        $precios = $repoPrecios->findPrecioProduct($findedProd->getRefProd(),$cantidad);
        $precio = 0;

        foreach ($precios as $tramo) {
            if($tramo->getCantidad() <= $cantidad)
            {
                $precio = $tramo->getPrecio();
            }
            
        }

        return new JsonResponse(["precio"=>$precio],200);

    }

}


?>