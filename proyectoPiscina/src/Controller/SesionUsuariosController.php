<?php

namespace App\Controller;

use App\Entity\SesionUsuarios;
use App\Form\SesionUsuariosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/sesion/usuarios")
 */
class SesionUsuariosController extends AbstractController
{
    /**
     * @Route("/", name="sesion_usuarios_index", methods={"GET"})
     */
    public function index(): Response
    {
        $sesionUsuarios = $this->getDoctrine()
            ->getRepository(SesionUsuarios::class)
            ->findAll();

        return $this->render('sesion_usuarios/index.html.twig', [
            'sesion_usuarios' => $sesionUsuarios,
        ]);
    }

    /**
     * @Route("/new", name="sesion_usuarios_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $sesionUsuario = new SesionUsuarios();
        $form = $this->createForm(SesionUsuariosType::class, $sesionUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sesionUsuario);
            $entityManager->flush();

            return $this->redirectToRoute('sesion_usuarios_index');
        }

        return $this->render('sesion_usuarios/new.html.twig', [
            'sesion_usuario' => $sesionUsuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sesion_usuarios_show", methods={"GET"})
     */
    public function show(SesionUsuarios $sesionUsuario): Response
    {
        return $this->render('sesion_usuarios/show.html.twig', [
            'sesion_usuario' => $sesionUsuario,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sesion_usuarios_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SesionUsuarios $sesionUsuario): Response
    {
        $form = $this->createForm(SesionUsuariosType::class, $sesionUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sesion_usuarios_index');
        }

        return $this->render('sesion_usuarios/edit.html.twig', [
            'sesion_usuario' => $sesionUsuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sesion_usuarios_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SesionUsuarios $sesionUsuario): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sesionUsuario->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sesionUsuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sesion_usuarios_index');
    }
}
