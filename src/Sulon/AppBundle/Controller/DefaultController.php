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
        
//        $factory = $this->get('security.encoder_factory');
//        $user = new \Sulon\UserBundle\Entity\User();
//
//        $encoder = $factory->getEncoder($user);
//        $password = $encoder->encodePassword('tututoto', $user->getSalt());
//        var_dump($password);
//        die();
        
        return $this->render('SulonAppBundle:Default:index.html.twig');
    }
    
    public function testAction()
    {
        return $this->render('SulonAppBundle:Default:test.html.twig');
    }
}
