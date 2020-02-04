<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\EventoFederacion;
use DOMDocument;

class EventosController extends AbstractController
{
    /**
     * @Route("/eventos", name="eventos")
     */
    public function index()
    {
        $eventosAutonomicos=$this->getContent("https://www.fncv.es/es/calendario-natacion", 0);
        $eventosValencia=$this->getContent("https://www.fncv.es/es/calendario-natacion", 2);

        return $this->render('eventos/index.html.twig', [
            'controller_name' => 'EventosController',
            'dataAuto' => $eventosAutonomicos,
            'dataVal' => $eventosValencia
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
}
