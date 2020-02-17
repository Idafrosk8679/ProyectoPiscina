<?php

namespace App\Controller;

use App\Entity\GrupoUsuario;
use App\Form\GrupoUsuarioType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/grupo/usuario")
 */
class GrupoUsuarioController extends AbstractController
{
    /**
     * @Route("/", name="grupo_usuario_index", methods={"GET"})
     */
    public function index(): Response
    {
        $grupoUsuarios = $this->getDoctrine()
            ->getRepository(GrupoUsuario::class)
            ->findAll();

        return $this->render('grupo_usuario/index.html.twig', [
            'grupo_usuarios' => $grupoUsuarios,
        ]);
    }

    /**
     * @Route("/new", name="grupo_usuario_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $grupoUsuario = new GrupoUsuario();
        $form = $this->createForm(GrupoUsuarioType::class, $grupoUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($grupoUsuario);
            $entityManager->flush();

            return $this->redirectToRoute('grupo_usuario_index');
        }

        return $this->render('grupo_usuario/new.html.twig', [
            'grupo_usuario' => $grupoUsuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="grupo_usuario_show", methods={"GET"})
     */
    public function show(GrupoUsuario $grupoUsuario): Response
    {
        return $this->render('grupo_usuario/show.html.twig', [
            'grupo_usuario' => $grupoUsuario,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="grupo_usuario_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GrupoUsuario $grupoUsuario): Response
    {
        $form = $this->createForm(GrupoUsuarioType::class, $grupoUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('grupo_usuario_index');
        }

        return $this->render('grupo_usuario/edit.html.twig', [
            'grupo_usuario' => $grupoUsuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="grupo_usuario_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GrupoUsuario $grupoUsuario): Response
    {
        if ($this->isCsrfTokenValid('delete'.$grupoUsuario->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($grupoUsuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('grupo_usuario_index');
    }
}
