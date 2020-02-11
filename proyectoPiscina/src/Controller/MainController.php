<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {

        $imagenes=[];
        
        $abrir=opendir('img/muestra');
        
        while ($img=readdir($abrir)){

            $extension=explode(".", $img)[1];

            if (strcasecmp($extension, 'png') === 0 || strcasecmp($extension, 'jpg') === 0) {

                array_push($imagenes, $img);
           
            }
        }

        
        return $this->render('main/index.html.twig', [
            'title' => 'Actividades',
            'controller_name' => 'MainController',
            'imagenes' => $imagenes
        ]);
    }


}
