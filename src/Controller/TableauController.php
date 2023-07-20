<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableauController extends AbstractController
{
    #[Route('/', name: 'tableau')]
    public function tableau(): Response
    {
        return $this->render('tableau/tableau.html.twig');
    }

    
}
