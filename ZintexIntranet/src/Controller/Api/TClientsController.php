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
        
        $proforma = $proformaRepo->find($req->get("FraProf"));
        $client = $repo->find($req->get("client"));
        if(!$proforma->getNumFraprof())
        {
            $marca = $client->getMarcaCli();
            $ultimaProforma = $empreseRepo->findOneBy(["marca"=>$marca]);
            $ultimaProforma->setNumProforma($ultimaProforma->getNumProforma()+ 1);
            $em->persist($ultimaProforma);
            $em->flush();
            $year = new \DateTime();
            $year = $year->format("y");
            $codigo = $marca." ".$year."_";
            $zeros = str_pad("0",4-count($ultimaProforma),"0");
            $numFraProf = $codigo.$zeros.$ultimaProforma->getNumProforma()." P";
            $proforma->setNumFraprof($numFraProf);
            $em->persist($proforma);
            $em->flush();
            return new JsonResponse(["metode"=>$client->getMetPag()->getIdMetode(),"metodeDesc"=>$client->getMetPag()->getDescripcio(), "iva"=>$client->getTipusIva(),"persona"=>$client->getTractCli()->getTractament()." ".$client->getNomfraCli()." ".$client->getCognomfraCli(),"numProf"=>$numFraProf],200);

        }
        
        return new JsonResponse(["metode"=>$client->getMetPag()->getIdMetode(),"metodeDesc"=>$client->getMetPag()->getDescripcio(), "iva"=>$client->getTipusIva(),"persona"=>$client->getTractCli()->getTractament()." ".$client->getNomfraCli()." ".$client->getCognomfraCli(), "numProf"=>$proforma->getNumFraprof()],200);

    }

}


?>