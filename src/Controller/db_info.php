<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

// Show DB Info
class db_info extends AbstractController
{
    public function index():Response{


        return $this->render('db_info.html.twig', ['db_name' => $db_name]);
    }

}