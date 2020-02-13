<?php

namespace App\Controller;

use App\Entity\Informacion;
use App\Form\InformacionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/informacion")
 */
class InformacionController extends AbstractController
{
    /**
     * @Route("/", name="informacion_index", methods={"GET"})
     */
    public function index(): Response
    {
        $informacions = $this->getDoctrine()
            ->getRepository(Informacion::class)
            ->findAll();

        return $this->render('informacion/index.html.twig', [
            'informacions' => $informacions,
        ]);
    }

    /**
     * @Route("/new", name="informacion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $informacion = new Informacion();
        $form = $this->createForm(InformacionType::class, $informacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($informacion);
            $entityManager->flush();

            return $this->redirectToRoute('informacion_index');
        }

        return $this->render('informacion/new.html.twig', [
            'informacion' => $informacion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="informacion_show", methods={"GET"})
     */
    public function show(Informacion $informacion): Response
    {
        return $this->render('informacion/show.html.twig', [
            'informacion' => $informacion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="informacion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Informacion $informacion): Response
    {
        $form = $this->createForm(InformacionType::class, $informacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('informacion_index');
        }

        return $this->render('informacion/edit.html.twig', [
            'informacion' => $informacion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="informacion_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Informacion $informacion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$informacion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($informacion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('informacion_index');
    }
}
