<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index()
    {

        //Este es un controller totalmente vacio que no enlaza a ningun sitio, pero estar hecho para algun futuro esta

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }

    
}
