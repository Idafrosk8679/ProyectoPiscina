<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActividadesController extends AbstractController
{
    /**
     * @Route("/actividades", name="actividades")
     */
    public function index()
    {

        return $this->render('actividades/index.html.twig', [
            'controller_name' => 'ActividadesController',
        ]);
    }

    
}
