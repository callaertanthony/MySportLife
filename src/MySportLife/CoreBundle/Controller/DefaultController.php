<?php

namespace MySportLife\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if(false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            return $this->redirect($this->generateUrl('msl_user_login'));
        }
        return $this->render('MSLTwigBundle::layout.html.twig');
    }
}
