<?php

namespace App\Controller;

use App\Entity\WebFotos;
use App\Form\WebFotosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/web/fotos")
 */
class WebFotosController extends AbstractController
{
    /**
     * @Route("/", name="web_fotos_index", methods={"GET"})
     */
    public function index(): Response
    {
        $webFotos = $this->getDoctrine()
            ->getRepository(WebFotos::class)
            ->findAll();

        return $this->render('web_fotos/index.html.twig', [
            'web_fotos' => $webFotos,
        ]);
    }

    /**
     * @Route("/new", name="web_fotos_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $webFoto = new WebFotos();
        $form = $this->createForm(WebFotosType::class, $webFoto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($webFoto);
            $entityManager->flush();

            return $this->redirectToRoute('web_fotos_index');
        }

        return $this->render('web_fotos/new.html.twig', [
            'web_foto' => $webFoto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="web_fotos_show", methods={"GET"})
     */
    public function show(WebFotos $webFoto): Response
    {
        return $this->render('web_fotos/show.html.twig', [
            'web_foto' => $webFoto,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="web_fotos_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, WebFotos $webFoto): Response
    {
        $form = $this->createForm(WebFotosType::class, $webFoto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('web_fotos_index');
        }

        return $this->render('web_fotos/edit.html.twig', [
            'web_foto' => $webFoto,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="web_fotos_delete", methods={"DELETE"})
     */
    public function delete(Request $request, WebFotos $webFoto): Response
    {
        if ($this->isCsrfTokenValid('delete'.$webFoto->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($webFoto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('web_fotos_index');
    }
}
