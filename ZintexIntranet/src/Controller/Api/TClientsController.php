<?php
namespace App\Controller\Api;

use App\Entity\TClients;
use App\Repository\TClientsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/clients")
 */
class TClientsController extends AbstractController {

    /**
     * @Route("/get_metode_pag", name="t_clients_get_fraprof")
     */
    public function getMetodePag(TClientsRepository $repo, Request $req) : JsonResponse {
        
        $client = $repo->find($req->get("client"));

        

        return new JsonResponse(["metode"=>$client->getMetPag()->getIdMetode(),"metodeDesc"=>$client->getMetPag()->getDescripcio(), "iva"=>$client->getTipusIva(),"persona"=>$client->getTractCli()->getTractament()." ".$client->getNomfraCli()." ".$client->getCognomfraCli()],200);

    }
}


?>