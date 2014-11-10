<?php

namespace MySportLife\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function DefaultAction()
    {
        return $this->render('MSLUserBundle:Login:Default.html.twig', array(
                // ...
            ));    }

}
