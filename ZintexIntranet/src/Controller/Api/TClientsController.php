<?php
namespace App\Controller\Api;

use App\Entity\TClients;
use App\Repository\TClientsRepository;
use App\Repository\TEmpresesRepository;
use App\Repository\TFraproformaRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/t/clients")
 */
class TClientsController extends AbstractController {

    /**
     * @Route("/getfraProfData", name="t_clients_get_fraprof")
     */
    public function getMetodePag(TClientsRepository $repo, Request $req, TEmpresesRepository $empreseRepo, EntityManagerInterface $em, TFraproformaRepository $proformaRepo) : JsonResponse {
        
        $client = $repo->find($req->get("client"));

        
        return new JsonResponse(["metode"=>$client->getMetPag()->getIdMetode(),"metodeDesc"=>$client->getMetPag()->getDescripcio(), "iva"=>$client->getTipusIva(),"persona"=>$client->getTractCli()->getTractament()." ".$client->getNomfraCli()." ".$client->getCognomfraCli()],200);

    }

    /**
     * @Route("/getclients", name="t_clients_get")
     */
    public function getClient(Request $req, TClientsRepository $repo)
    {
        $findedClient = $repo->findClients($req->get("numProf"));

        $clients = array_map(function($prof){
            return $prof;
        }, $findedClient);

        return new JsonResponse(["results"=>$clients],200);
    }

    /**
     * @Route("/searchClients", name="t_clients_search")
     */
    public function getClientsSearch(Request $req, TClientsRepository $clientesRepo)
    {

        $clientes  = $clientesRepo->getClientesByData($req->get("client"));
        return new JsonResponse($clientes);
    }



}


?>