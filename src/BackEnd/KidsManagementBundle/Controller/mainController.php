<?php

namespace BackEnd\KidsManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class mainController extends Controller
{
    public function addPlugAction()
    {
        return $this->render('BackEndKidsManagementBundle:main:add_plug.html.twig', array(
            // ...
        ));
    }

    public function recoveringPlugAction()
    {
        return $this->render('BackEndKidsManagementBundle:main:recovering_plug.html.twig', array(
            // ...
        ));
    }

    public function updatePlugAction()
    {
        return $this->render('BackEndKidsManagementBundle:main:update_plug.html.twig', array(
            // ...
        ));
    }

    public function deletePlugAction()
    {
        return $this->render('BackEndKidsManagementBundle:main:delete_plug.html.twig', array(
            // ...
        ));
    }

    public function paymentAction()
    {
        return $this->render('BackEndKidsManagementBundle:main:payment.html.twig', array(
            // ...
        ));
    }

}
