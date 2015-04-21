<?php

namespace Sulon\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Vos changements ont été sauvegardés!'
        );
        
        return $this->render('SulonAppBundle:Default:index.html.twig');
    }
    
    public function testAction()
    {
        return $this->render('SulonAppBundle:Default:test.html.twig');
    }
}
