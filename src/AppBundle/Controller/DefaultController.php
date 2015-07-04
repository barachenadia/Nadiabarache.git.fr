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

    /**
     * @Route("/porfolio", name="porfolio")
     */
     public function porfolioAction()
    {
        $tags1 =array('Smfony2', 'Doctrine', 'Twig', 'Bundle', 'GIT', 'Bootstrap' );
        $tags2 =array('Smfony2', 'Doctrine', 'Twig', 'Foundation', 'GIT', 'Capifony' );
        $tags3 =array('Cordova', 'JQuery', 'mobile', 'android', 'IOS');
        $tags4 =array('Ruby', 'On', 'Rails','Bootstrap', 'GIT', 'Heroku' );
        return $this->render('default/porfolio.html.twig', array('tags1' => $tags1,
                                                                'tags2' => $tags2,
                                                                'tags3' => $tags3,
                                                                'tags4' => $tags4, ));
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blogAction()
    {
        return $this->render('default/blog.html.twig');
    }

     /**
     * @Route("/article/1", name="article/1")
     */
    public function Article1Action()
    {
        return $this->render('default/article1.html.twig');
    }

    /**
     * @Route("/article/2", name="article/2")
     */
    public function Article2Action()
    {
        return $this->render('default/article2.html.twig');
    }

    /**
     * @Route("/article/3", name="article/3")
     */
    public function Article3Action()
    {
        return $this->render('default/article3.html.twig');
    }
}
