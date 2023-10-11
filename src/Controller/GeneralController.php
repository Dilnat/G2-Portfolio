<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class GeneralController extends AbstractController
{
    #[Route('/', name:'accueil', methods:["GET"])]
    public function accueil() : Response{
        return $this->render("base.html.twig");
    }
}