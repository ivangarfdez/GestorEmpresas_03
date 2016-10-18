<?php

namespace generadorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('generadorBundle:Default:index.html.twig');
    }

}
