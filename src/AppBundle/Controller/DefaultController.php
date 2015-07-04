<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

     public function porfolioAction()
    {
    /**
     * @Route("/porfolio", name="porfolio")
     */
        return $this->render('default/porfolio.html.twig');
    }
}
