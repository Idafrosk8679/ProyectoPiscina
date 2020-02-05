<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EquiposController extends AbstractController
{
    /**
     * @Route("/equipos", name="equipos")
     */
    public function index()
    {

        return $this->render('equipo/index.html.twig', [
            'controller_name' => 'EquiposController',
        ]);
    }

    
}
