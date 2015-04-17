<?php

namespace Sulon\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SulonAppBundle:Default:index.html.twig');
    }
}
