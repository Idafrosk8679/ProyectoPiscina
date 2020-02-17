<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\EventoFederacion;
use App\Entity\Web;
use App\Entity\WebFotos;
use Doctrine\ORM\EntityManagerInterface;
use DOMDocument;

    /**
    * @Route("/", name="main")
    */

class MainController extends AbstractController
{

    private $entityManager;
    private $web;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

        return $this->web = $this->entityManager->getRepository(Web::class)->findAll()[0];
        
    }



    /**
     * @Route("/", name="_index")
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
            'imagenes' => $imagenes,
            'web' => $this->web
        ]);
    }

    /**
     * @Route("/eventos", name="_eventos")
     */
    public function indexEventos()
    {
        $eventosAutonomicos=$this->getContent("https://www.fncv.es/es/calendario-natacion", 0);
        $eventosValencia=$this->getContent("https://www.fncv.es/es/calendario-natacion", 2);

        return $this->render('eventos/index.html.twig', [
            'title' => 'Eventos',
            'controller_name' => 'EventosController',
            'dataAuto' => $eventosAutonomicos,
            'dataVal' => $eventosValencia,
            'web' => $this->web
        ]);
    }


    public function getContent($url, $sec)
    {

        $dataEvents = array();

        $content = new DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);

        $str = file_get_contents($url);
        $content->loadHTML(mb_convert_encoding($str, 'HTML-ENTITIES', 'UTF-8'));

        libxml_use_internal_errors(false);
        $elements = $content
            ->getElementsByTagName('tbody')->item($sec)
            ->getElementsByTagName('tr');

        foreach ($elements as $tr) {

            $event= new EventoFederacion();

            $childs = $tr->childNodes;

            $list=$tr->getElementsByTagName('td');

            foreach ($list as $td) {

                $attr=$td->getAttribute('data-title');

                switch ($attr) {

                    case 'Fechas':
                        $event->setFechas($td->nodeValue);
                        break;
                    
                    case 'Competición':
                        $event->setCompeticion($td->nodeValue);
                        break;

                    case 'Piscina':
                        $event->setCentro($td->nodeValue);
                        break;

                    case 'Localidad':
                        $event->setLocalidad($td->nodeValue);
                        break;

                    case 'Horario':
                        $event->setHorario($td->nodeValue);
                        break;

                    case 'Categorías':
                        $event->setCategoria($td->nodeValue);
                        break;

                }
                
            }

            array_push($dataEvents, $event);
        }

        return $dataEvents;
    }

    /**
     * @Route("/equipo", name="_equipo")
     */
    public function indexEquipo()
    {
        $webFotos=$this->getWebFotos();

        return $this->render('equipo/index.html.twig', [
            'title' => 'Equipo',
            'controller_name' => 'EquipoController',
            'web' => $this->web,
            'webfotos' => $webFotos
        ]);
    }


    public function getWebFotos()
    {
        $webFotos = $this->getDoctrine()
            ->getRepository(WebFotos::class)
            ->findAll();

        return  $webFotos;

    }
}
