<?php

namespace UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/inscrit")
     */
    public function indexAction()
    {
        return $this->render('UtilisateurBundle:Template:inscrit.html.twig');
    }
}
