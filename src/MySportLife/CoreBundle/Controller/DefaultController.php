<?php

namespace MySportLife\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MSLTwigBundle::layout.html.twig');
    }
}
