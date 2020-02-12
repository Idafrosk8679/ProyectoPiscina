<?php

namespace App\Controller;

use App\Entity\Usuarios;
use App\Form\UsuariosType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/app", name="app")
 */

class AppController extends AbstractController
{


    private $entityManager;
    private $user;
    private $urlGenerator;

    public function __construct(EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator)
    {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;

        if(session_status() != 2){
            session_start();
        }

            return $this->user = $this->entityManager->getRepository(Usuarios::class)->findOneBy(['dni' => $_SESSION['dni']]);
        

    }

    /**
     * @Route("/", name="_index")
     */
    public function index()
    {
        $data["usuarios"] = $this->getUsuarios();

        return $this->render('app/index.html.twig', [
            'title' => 'App',
            'user' => $this->user,
            'data' => $data,
            'controller_name' => 'AppController',
        ]);
    }

    /**
     * @Route("/add", name="_add")
     */
    public function add(Request $request)
    {

        $form = $this->newUsuario($request);

        return $this->render('add/index.html.twig', [
            'controller_name' => 'AddController',
            'user' => $this->user,
            'form' => $form
        ]);
    }

    /**
     * @Route("/edit", name="_edit")
     */
    public function edit()
    {
        return $this->render('edit/index.html.twig', [
            'controller_name' => 'EditController',
            'user' => $this->user,
        ]);
    }

    /**
     * @Route("/remove", name="_remove")
     */
    public function remove()
    {
        return $this->render('remove/index.html.twig', [
            'controller_name' => 'RemoveController',
            'user' => $this->user,
        ]);
    }


    public function getUsuarios()
    {
        $usuarios = $this->getDoctrine()
            ->getRepository(Usuarios::class)
            ->findAll();

        return  $usuarios;

    }


    public function newUsuario(Request $request)
    {
        $usuario = new Usuarios();

        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();

            return $this->redirectToRoute('app_index');
        } else{
           return $form->createView();
        }

    }


}
