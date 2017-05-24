<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

    /**
     * @Route("/lucky/fecha")
     */
    public function fechaAction()
    {
        $fecha = date('l jS \of F Y h:i:s A');
        $numero = mt_rand(0, 100);

        return $this->render('lucky/fecha.html.twig', array(
            'fecha' => $fecha, 'number' => $numero
        ));
    }
}