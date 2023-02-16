<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class AboutController extends AbstractController
{
    #[Route('/', name:'about')]
    public function index()
    {
        return $this->render('base.html.twig');
    }

//    #[Route('/about')]
//    public function about()
//    {
//        return $this->render('base.html.twig');
//    }
}