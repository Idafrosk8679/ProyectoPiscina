<?php

namespace App\Controller;

use App\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index(SessionInterface $session, EntityManagerInterface $entityManager)
    {
        session_start();
        
        if (isset($_SESSION['dni'])) {
            $user = $entityManager->getRepository(Usuarios::class)->findOneBy(['dni' =>  $_SESSION['dni']]);

            return $this->render('app/index.html.twig', [
                'title' => 'App',
                'user' => $user,
                'controller_name' => 'AppController',
            ]);

        } else {
            return $this->redirectToRoute('main');
        }
    }
}
