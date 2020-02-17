<?php

namespace App\Controller;

use App\Entity\Grupos;
use App\Form\GruposType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/grupos")
 */
class GruposController extends AbstractController
{
    /**
     * @Route("/", name="grupos_index", methods={"GET"})
     */
    public function index(): Response
    {
        $grupos = $this->getDoctrine()
            ->getRepository(Grupos::class)
            ->findAll();

        return $this->render('grupos/index.html.twig', [
            'grupos' => $grupos,
        ]);
    }

    /**
     * @Route("/new", name="grupos_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $grupo = new Grupos();
        $form = $this->createForm(GruposType::class, $grupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($grupo);
            $entityManager->flush();

            return $this->redirectToRoute('grupos_index');
        }

        return $this->render('grupos/new.html.twig', [
            'grupo' => $grupo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="grupos_show", methods={"GET"})
     */
    public function show(Grupos $grupo): Response
    {
        return $this->render('grupos/show.html.twig', [
            'grupo' => $grupo,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="grupos_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Grupos $grupo): Response
    {
        $form = $this->createForm(GruposType::class, $grupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('grupos_index');
        }

        return $this->render('grupos/edit.html.twig', [
            'grupo' => $grupo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="grupos_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Grupos $grupo): Response
    {
        if ($this->isCsrfTokenValid('delete'.$grupo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($grupo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('grupos_index');
    }
}
