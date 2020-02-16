<?php

namespace App\Controller;

use App\Entity\Entrenamiento;
use App\Entity\Fisico;
use App\Entity\Roles;
use App\Entity\Grupos;
use App\Entity\GrupoUsuario;
use App\Entity\Sesion;
use App\Entity\SesionUsuarios;
use App\Entity\Usuarios;
use App\Entity\Web;
use App\Entity\WebFotos;
use App\Entity\Informacion;
use App\Form\InformacionType;
use App\Form\EntrenamientoType;
use App\Form\GruposType;
use App\Form\GrupoUsuarioType;
use App\Form\SesionType;
use App\Form\SesionUsuariosType;
use App\Form\SesionUsuariosTypeEntrenador;
use App\Form\UsuariosType;
use App\Form\UsuariosTypeParental;
use App\Form\WebFotosType;
use App\Form\WebType;
use App\Form\FisicoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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

        if (session_status() != 2) {
            session_start();
        }

        return $this->user = $this->entityManager->getRepository(Usuarios::class)->findOneBy(['dni' => $_SESSION['dni']]);

    }

    /**
     * @Route("/", name="_index", methods={"GET","POST"})
     */
    public function index(Request $request): Response
    {

        $sesion = new Sesion();
        $form = $this->createForm(SesionType::class, $sesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sesion);
            $entityManager->flush();

            return $this->redirectToRoute('app_index', );
        }

        $data = $this->getEntrenamientos();

        $json = json_encode($data);
        echo "<script type='text/javascript'>
        let data = " . $json . "
        </script>";

        return $this->render('app/index.html.twig', [
            'title' => 'App',
            'sesion' => $sesion,
            'user' => $this->user,
            'form' => $form->createView(),
            'controller_name' => 'AppController',
        ]);
    }

    /**
     * @Route("/sesion/entrenador/{id}", name="_sesion_entrenador", methods={"GET","POST"})
     */
    public function sesionEntrenador(Request $request, Sesion $sesion): Response
    {
        $entrenamiento = new Entrenamiento();
        $form = $this->createForm(EntrenamientoType::class, $entrenamiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entrenamiento->setIdSesion($sesion);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entrenamiento);
            $entityManager->flush();

            return $this->redirectToRoute('app_sesion_entrenador', array('id' => $sesion->getId()));
        }

        $sesionUsuario = new SesionUsuarios();

        $form2 = $this->createForm(SesionUsuariosTypeEntrenador::class, $sesionUsuario);
        $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {

            if (count($form2['usuarios']->getData()) > 0) {

                foreach ($form2['usuarios']->getData() as $u) {

                    $filterSU = null;
                    try {
                        $filterSU = $this->getDoctrine()
                            ->getRepository(SesionUsuarios::class)
                            ->findOneBy(array(
                                'id_sesion' => $sesion->getId(),
                                'dni' => $u,
                            ));
                    } catch (\Throwable $th) {
                        //throw $th;
                    }

                    if ($filterSU == null) {
                        $this->debug_to_console('fuera');
                        $su = new SesionUsuarios();
                        $su->setDni($u);
                        $su->setIdSesion($sesion);

                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($su);
                        $entityManager->flush();

                    }

                    unset($su);
                }
            }
        }
        //return $this->redirectToRoute('app_sesion', array('id' => $sesion->getId()));

        $dataUsers = $this->getSesionUsuarios($sesion);

        return $this->render('sesion/indexEntrenador.html.twig', [
            'sesion' => $sesion,
            'user' => $this->user,
            'entrenamiento' => $entrenamiento,
            'form' => $form->createView(),
            'sesion_usuario' => $sesionUsuario,
            'form2' => $form2->createView(),
            'dataUsers' => $dataUsers,
        ]);
    }

    /**
     * @Route("/sesion/{id}?{dni?=0}", name="_sesion", methods={"GET","POST"})
     */
    public function sesion(Request $request, Sesion $sesion, $dni): Response
    {

        $u = 0;
        if ($dni == 0) {
            if ($this->user->getRol()->getNombre()=='parental') {
                $u = $this->user->getFamiliar();
            }else {
               $u = $this->user->getDni();
            }
            
        } else {
            $u = $dni;
        }

        $sesionUsuario = $this->getDoctrine()
            ->getRepository(SesionUsuarios::class)
            ->findOneBy(array(
                'id_sesion' => $sesion->getId(),
                'dni' => $u,
            ));

        $form = $this->createForm(SesionUsuariosType::class, $sesionUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            if ($dni == 0) {
                return $this->redirectToRoute('app_sesion', array('id' => $sesion->getId()));
            } else {
                return $this->redirectToRoute('app_sesion', array('id' => $sesion->getId(), 'dni' => $u));
            }

        }

        $dataUsers = $this->getSesionUsuarios($sesion);

        return $this->render('sesion/index.html.twig', [
            'sesion' => $sesion,
            'user' => $this->user,
            'form' => $form->createView(),
            'sesion_usuario' => $sesionUsuario,
            'dataUsers' => $dataUsers,
        ]);

    }

    /**
     * @Route("/fisico", name="_fisico", methods={"GET","POST"})
     */
    public function fisico(Request $request): Response
    {

        $fisico = new Fisico();
        $form = $this->createForm(FisicoType::class, $fisico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fisico);
            $entityManager->flush();

            return $this->redirectToRoute('app_fisico');
        }

        $data = $this->getFisico();

        if ($data != null) {
            $fechas = json_encode($data['fechas']);

            $peso = json_encode($data['peso']);
            $altura = json_encode($data['altura']);
    
            echo "<script type='text/javascript'>
            let fechas = " . $fechas . "
            let altura = " . $altura . "
            let peso = " . $peso . "
            </script>";
        }

        return $this->render('fisico/index.html.twig', [
            'user' => $this->user,
            'fisicos' => $data['fisicos'],
            'fisico' => $fisico,
            'form' => $form->createView(),
        ]);


    }


    /**
     * @Route("/fisico/edit/{id}", name="_fisico_edit", methods={"GET","POST"})
     */
    public function editFisico(Request $request, Fisico $fisico): Response
    {
        $form = $this->createForm(FisicoType::class, $fisico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_fisico');
        }

        return $this->render('fisico/edit.html.twig', [
            'fisico' => $fisico,
            'user' => $this->user,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/noticias", name="_noticias", methods={"GET","POST"})
     */
    public function newNoticia(Request $request): Response
    {
        $noticias=$this->getNoticias();

        $informacion = new Informacion();
        $form = $this->createForm(InformacionType::class, $informacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $informacion->setFecha(\DateTime::createFromFormat('d-m-Y',date('d-m-Y')));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($informacion);
            $entityManager->flush();

            return $this->redirectToRoute('app_noticias');
        }

        return $this->render('informacion/index.html.twig', [
            'informacion' => $informacion,
            'noticias' => $noticias,
            'user' => $this->user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/noticias/{id}", name="_noticias_edit", methods={"GET","POST"})
     */
    public function editNoticia(Request $request, Informacion $informacion): Response
    {
        $form = $this->createForm(InformacionType::class, $informacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_noticias');
        }

        return $this->render('informacion/edit.html.twig', [
            'informacion' => $informacion,
            'user' => $this->user,
            'form' => $form->createView(),
        ]);
    }




    /**
     * @Route("/fisico/delete/{id}", name="_fisico_delete", methods={"DELETE"})
     */
    public function deleteFisico(Request $request, Fisico $fisico): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fisico->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fisico);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_fisico');
    }

    /**
     * @Route("/sesion/delete/{id}", name="_sesion_delete", methods={"DELETE"})
     */
    public function deleteSesion(Request $request, Sesion $sesion): Response
    {
        if ($this->isCsrfTokenValid('delete' . $sesion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sesion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sesion_index');
    }

    /**
     * @Route("/sesionUsuarios/delete/{id}", name="_sesion_usuarios_delete", methods={"DELETE"})
     */
    public function deleteSesionUsuario(Request $request, SesionUsuarios $sesionUsuario): Response
    {
        if ($this->isCsrfTokenValid('delete' . $sesionUsuario->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sesionUsuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sesion', array('id' => $sesionUsuario->getIdSesion()->getId()));
    }

    /**
     * @Route("/sesion/entrenamiento/{id}", name="_entrenamiento_delete", methods={"DELETE"})
     */
    public function deleteEntrenamiento(Request $request, Entrenamiento $entrenamiento): Response
    {
        if ($this->isCsrfTokenValid('delete' . $entrenamiento->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($entrenamiento);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sesion', array('id' => $entrenamiento->getIdSesion()->getId()));
    }

    /**
     * @Route("/gestion_usuarios", name="_gestion_usuarios")
     */
    public function gestionUsuarios(Request $request)
    {

        $data["usuarios"] = $this->getUsuarios();
        $data["grupos"] = $this->getGrupos();
        $data["grupo_usuarios"] = $this->getGrupos_usuario();

        return $this->render('gestion_usuarios/index.html.twig', [
            'controller_name' => 'AddController',
            'user' => $this->user,
            'data' => $data,
        ]);
    }

    /**
     * @Route("/gestion_usuarios/usuario/new", name="_usuarios_new", methods={"GET","POST"})
     */
    function new(Request $request): Response {
        $usuario = new Usuarios();
        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $uploadedFile = $form['fotoFile']->getData();
            if ($uploadedFile != null) {
                $destination = $this->getParameter('kernel.project_dir') . '/public/img/fotos';

                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                /*Urlizer::urlize($originalFilename).'-'.uniqid().'.'.*/
                $newFilename = $originalFilename . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );

                $usuario->setFoto($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($usuario);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_usuarios');
        }

        return $this->render('usuarios/new.html.twig', [
            'usuario' => $usuario,
            'user' => $this->user,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/gestion_usuarios/usuarioParental/{dni}", name="_usuario_parental", methods={"GET","POST"})
     */
    public function parental(Request $request, $dni): Response
    {   
        $u = new Usuarios();
        $form = $this->createForm(UsuariosTypeParental::class, $u);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                

                $u->setFoto('NULL');
                $rol = $this->getDoctrine()
                    ->getRepository(Roles::class)
                    ->findOneBy(['id' => 10]);
                $u->setRol($rol);
                $u->setFamiliar($dni);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($u);
                $entityManager->flush();

                return $this->redirectToRoute('app_gestion_usuarios');
            }


        return $this->render('usuarios/newParental.html.twig', [
            'user' => $this->user,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/gestion_usuarios/usuario/{dni}", name="_usuarios_show", methods={"GET"})
     */
    public function show(Usuarios $usuario): Response
    {
        return $this->render('usuarios/show.html.twig', [
            'usuario' => $usuario,
            'user' => $this->user,
        ]);
    }

    /**
     * @Route("/gestion_usuarios/usuario/{dni}/edit", name="_usuarios_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Usuarios $usuario): Response
    {
        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $uploadedFile = $form['fotoFile']->getData();
            if ($uploadedFile != null) {
                $destination = $this->getParameter('kernel.project_dir') . '/public/img/fotos';

                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                /*Urlizer::urlize($originalFilename).'-'.uniqid().'.'.*/
                $newFilename = $originalFilename . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );

                $usuario->setFoto($newFilename);
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_gestion_usuarios');
        }

        return $this->render('usuarios/edit.html.twig', [
            'usuario' => $usuario,
            'user' => $this->user,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/gestion_usuarios/usuario/delete/{dni}", name="_usuarios_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Usuarios $usuario): Response
    {
        if ($this->isCsrfTokenValid('delete' . $usuario->getDni(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($usuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_usuarios');
    }

    /************************************************************************************************************* */

    /**
     * @Route("/gestion_usuarios/grupo/new", name="_grupos_new", methods={"GET","POST"})
     */
    public function newGrupo(Request $request): Response
    {
        $grupo = new Grupos();
        $form = $this->createForm(GruposType::class, $grupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($grupo);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_usuarios');
        }

        return $this->render('grupos/new.html.twig', [
            'grupo' => $grupo,
            'user' => $this->user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/gestion_usuarios/grupo/show/{id}", name="_grupos_show", methods={"GET"})
     */
    public function showGrupo(Grupos $grupo): Response
    {
        return $this->render('grupos/show.html.twig', [
            'grupo' => $grupo,
            'user' => $this->user,
            'data' => $this->getGrupos_usuario(),
        ]);
    }

    /**
     * @Route("/gestion_usuarios/grupo/{id}/edit", name="_grupos_edit", methods={"GET","POST"})
     */
    public function editGrupo(Request $request, Grupos $grupo): Response
    {
        $grupoUsuario = new GrupoUsuario();
        $form = $this->createForm(GrupoUsuarioType::class, $grupoUsuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($grupoUsuario);
            $entityManager->flush();
        }

        return $this->render('grupos/edit.html.twig', [
            'data' => $this->getGrupos_usuario(),
            'grupo' => $grupo,
            'user' => $this->user,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/gestion_usuarios/grupo/delete/{id}", name="_grupos_delete", methods={"DELETE"})
     */
    public function deleteGrupo(Request $request, Grupos $grupo): Response
    {
        if ($this->isCsrfTokenValid('delete' . $grupo->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($grupo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_usuarios');
    }

    /**
     * @Route("/gestion_usuarios/grupoUsuario/delete/{id}", name="_grupoUsuario_delete", methods={"DELETE"})
     */
    public function deleteGrupoUsuario(Request $request, GrupoUsuario $grupoUsuario): Response
    {
        if ($this->isCsrfTokenValid('delete' . $grupoUsuario->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($grupoUsuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_grupos_edit', array('id' => $grupoUsuario->getIdGrupo()->getId()));
        //return $this->redirectToRoute('app_gestion_usuarios');

    }

    /******************************************************************************************* */

    /**
     * @Route("/gestion_web", name="_gestion_web", methods={"GET","POST"})
     */
    public function gestionWeb(Request $request): Response
    {
        $web = $this->getDoctrine()
            ->getRepository(Web::class)
            ->findBy(['id' => 0])[0];

        $form = $this->createForm(WebType::class, $web);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
        }

        $webFotos = $this->getWebFotos();

        $webFoto = new WebFotos();
        $form2 = $this->createForm(WebFotosType::class, $webFoto);
        $form2->handleRequest($request);

        $filter = null;
        try {
            $filter = $this->getDoctrine()
                ->getRepository(WebFotos::class)
                ->findBy(['idUsuario' => $form2['idUsuario']->getData()])[0];
        } catch (\Throwable $th) {
            //throw $th;
        }

        if ($form2->isSubmitted() && $form2->isValid() && $filter == null) {

            $img = $this->getDoctrine()
                ->getRepository(Usuarios::class)
                ->findBy(['dni' => $form2['idUsuario']->getData()])[0];

            if ($img != null) {
                $webFoto->setFoto($img->getFoto());
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($webFoto);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_web');
        } else {
            unset($webFoto);
            unset($form2);

            $webFoto = new WebFotos();
            $form2 = $this->createForm(WebFotosType::class, $webFoto);
        }

        return $this->render('gestion_web/index.html.twig', [
            'user' => $this->user,
            'web' => $web,
            'data' => $webFotos,
            'form2' => $form2->createView(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/gestion_web/delete/{id}", name="_webfotos_delete", methods={"DELETE"})
     */
    public function deleteWeb(Request $request, WebFotos $webFoto): Response
    {
        if ($this->isCsrfTokenValid('delete' . $webFoto->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($webFoto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_web');
    }

    public function getUsuarios()
    {
        $usuarios = $this->getDoctrine()
            ->getRepository(Usuarios::class)
            ->findAll();

        return $usuarios;

    }

    public function getGrupos()
    {
        $grupos = $this->getDoctrine()
            ->getRepository(Grupos::class)
            ->findAll();

        return $grupos;

    }

    public function getGrupos_usuario()
    {
        $grupos_usuario = $this->getDoctrine()
            ->getRepository(GrupoUsuario::class)
            ->findAll();

        return $grupos_usuario;

    }

    public function getWebFotos()
    {
        $webFotos = $this->getDoctrine()
            ->getRepository(WebFotos::class)
            ->findAll();

        return $webFotos;

    }

    public function getSesionUsuarios($sesion)
    {
        $sesionUsuarios = $this->getDoctrine()
            ->getRepository(SesionUsuarios::class)
            ->findBy(['id_sesion' => $sesion]);

        return $sesionUsuarios;

    }

    public function getNoticias()
    {
        $sesionUsuarios = $this->getDoctrine()
            ->getRepository(Informacion::class)
            ->findAll();

        return $sesionUsuarios;

    }

    public function getEntrenamientos()
    {
        $entrenamientos = [];

        $sesion = [];
        $path = '';

        if ($this->user->getRol()->getNombre() == 'entrenador' || $this->user->getRol()->getNombre() == 'junta') {
            $path = 'app_sesion_entrenador';
            $sesion = $this->getDoctrine()
                ->getRepository(Sesion::class)
                ->findAll();

        }elseif($this->user->getRol()->getNombre() == 'parental'){

            $sesion = [];
            $path = 'app_sesion';

            $sesionUsuario = $this->getDoctrine()
                ->getRepository(SesionUsuarios::class)
                ->findBy(array(
                    'dni' => $this->user->getFamiliar(),
                ));

            foreach ($sesionUsuario as $s) {
                array_push($sesion, $s->getIdSesion());
            }

        } else {

            $sesion = [];
            $path = 'app_sesion';

            $sesionUsuario = $this->getDoctrine()
                ->getRepository(SesionUsuarios::class)
                ->findBy(array(
                    'dni' => $this->user->getDni(),
                ));

            foreach ($sesionUsuario as $s) {
                array_push($sesion, $s->getIdSesion());
            }

        }

        foreach ($sesion as $s) {

            $entr = $s->getEntrenamientos();

            $color = '#A49595';
            $textColor = '#000000';
            $fecha = $s->getFecha();
            $title = '';

            foreach ($entr as $e) {

                $estilo = '';
                $series = '';
                $metros = '';

                if ($e->getEstilo() != null) {
                    $estilo = $e->getEstilo()->getNombre() . PHP_EOL;
                } elseif ($e->getSeries() != null) {
                    $series = $e->getSeries() . ' series' . PHP_EOL;
                } elseif ($e->getMetros() != null) {
                    $metros = $e->getMetros()->getDistancia() . 'm';
                }

                $title = $title . $e->getTipos()->getTipo() . PHP_EOL . $estilo . PHP_EOL . PHP_EOL;

            }

            array_push($entrenamientos, array(
                'title' => $title,
                'start' => date_format($fecha, "Y-m-d"),
                'url' => $this->generateUrl($path, array('id' => $s->getId()), UrlGeneratorInterface::ABSOLUTE_URL),
                'color' => $color,
                'textColor' => $textColor,
                'firstDay' => 0,
            ));

        }

        return $entrenamientos;

    }

    public function getFisico()
    {
        $dataFisico = [];

        $fisicos = $this->getDoctrine()
            ->getRepository(Fisico::class)
            ->findBy(array(
                'dni' => $this->user->getDni(),
            ));

        if ($fisicos !=null) {
            $peso = [];
            $altura = [];
            $fechas = [];
    
            array_push($peso, 0);
            array_push($altura, 0);
            array_push($fechas, 0);
    
            foreach ($fisicos as $f) {
                array_push($peso, $f->getPeso());
                array_push($altura, $f->getAltura());
                array_push($fechas, $f->getFechaInserc()->format('d/m/Y'));
            }
    
            $pesoAltura = [];
    
            array_push($pesoAltura, array(
                'label' => 'Peso',
                'data' => $peso,
                'backgroundColor' => array('rgba(105, 0, 132, .2)'),
                'borderColor' => array('rgba(200, 99, 132, .7)'),
                'borderWidth' => 2,
            ));
    
            array_push($pesoAltura, array(
                'label' => 'Altura',
                'data' => $altura,
                'backgroundColor' => array('rgba(0, 137, 132, .2)'),
                'borderColor' => array('rgba(0, 10, 130, .7)'),
                'borderWidth' => 2,
            ));
    
            $dataFisico['fechas'] = $fechas;
            $dataFisico['peso']= $pesoAltura[0];
            $dataFisico['altura']= $pesoAltura[1];
            $dataFisico['fisicos']= $fisicos;
        }else{
            return null;
        }

        return $dataFisico;

    }

}
