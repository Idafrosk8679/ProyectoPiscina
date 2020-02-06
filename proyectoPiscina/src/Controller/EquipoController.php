<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EquipoController extends AbstractController
{
    /**
     * @Route("/equipo", name="equipo")
     */
    public function index()
    {

        return $this->render('equipo/index.html.twig', [
            'title' => 'Equipo',
            'controller_name' => 'EquipoController',
        ]);
    }

    
}
