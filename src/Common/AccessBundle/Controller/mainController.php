<?php

namespace Common\AccessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class mainController extends Controller
{
    public function loginAction()
    {
        $jh = 'df';
        return $this->render('CommonAccessBundle:main:login.html.twig', array(
            // ...
        ));
    }

    public function registrationAction()
    {
        return $this->render('CommonAccessBundle:main:registration.html.twig', array(
            // ...
        ));
    }

    public function renewPasswordAction()
    {
        return $this->render('CommonAccessBundle:main:renew_password.html.twig', array(
            // ...
        ));
    }

    public function changePasswordAction()
    {
        return $this->render('CommonAccessBundle:main:change_password.html.twig', array(
            // ...
        ));
    }
    
    public function redirectLoginAction()
    {
        return $this->redirect($this->generateUrl('add_plug'));
    }

}
