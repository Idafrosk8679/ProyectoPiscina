<?php

namespace App\Controller;

use DOMDocument;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        
        $eventosAutonomicos=$this->getContent("https://www.fncv.es/es/calendario-natacion", 0);
        $eventosVlencia=$this->getContent("https://www.fncv.es/es/calendario-natacion", 2);

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    public function getContent($url, $sec)
    {
        $data = array();

        $content = new DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);

        $str = file_get_contents($url);
        $content->loadHTML(mb_convert_encoding($str, 'HTML-ENTITIES', 'UTF-8'));

        libxml_use_internal_errors(false);
        $elements = $content
            ->getElementsByTagName('tbody')->item($sec)
            ->getElementsByTagName('tr');

        foreach ($elements as $tr) {

            $childs = $tr->childNodes;
            $e = array();
            foreach ($childs as $td) {
                array_push($e, $td->nodeValue);
            }

            array_push($data, $e);
        }

        foreach ($data as $tr) {

            foreach ($tr as $td) {
                echo $td;

                echo '<br> ';
            }

            echo '<br> ';
        }

        return $data;

    }
}
