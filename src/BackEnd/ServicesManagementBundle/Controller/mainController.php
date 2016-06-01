<?php

namespace BackEnd\ServicesManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class mainController extends Controller
{
    public function addServiceAction()
    {
        return $this->render('BackEndServicesManagementBundle:main:add.service.html.twig', array(
            // ...
        ));
    }

    public function recoveringServiceAction()
    {
        return $this->render('BackEndServicesManagementBundle:main:recovering_service.html.twig', array(
            // ...
        ));
    }

    public function deleteServiceAction()
    {
        return $this->render('BackEndServicesManagementBundle:main:delete_service.html.twig', array(
            // ...
        ));
    }

}
