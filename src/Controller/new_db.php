<?php

namespace App\Controller;

use App\Entity\DbTest;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class new_db extends AbstractController
{
    #[Route('/new', name: 'new_db')]
    public function new_db(ManagerRegistry $doctrine, Request $request):Response
    {
        $params = $request->request->all();
//var_dump($params); die;
        if(!empty($params)){
            // insert new DB
            $entityManager = $doctrine->getManager();
            $db = new DbTest();
            $db->setDbName($params['db_name']);

            $entityManager->persist($db);
            $entityManager->flush();

            return $this->redirectToRoute('/', $doctrine);
        }
        return $this->render('new_db.html.twig');

    }

}