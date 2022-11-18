<?php

namespace App\Controller;

use App\Entity\DbTest;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class main extends AbstractController
{

    #[Route('/', name: 'main')]
    public function index(ManagerRegistry $doctrine):Response{

        $db_list = $doctrine->getRepository(DbTest::class)->findAll();
// var_dump($db_list); die;

        return $this->render('main.html.twig', ['db_list' => $db_list]);
    }


}