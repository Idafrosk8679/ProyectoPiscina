<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CalendarController extends AbstractController
{
    /**
     * @Route("/calendar", name="calendar")
     */
    public function index()
    {
        return $this->render('app/calendar.html.twig', [
            'title' => 'Calendar',
            'controller_name' => 'CalendarController',
        ]);
    }
}

?>

