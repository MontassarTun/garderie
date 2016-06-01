<?php

namespace BackEnd\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class mainController extends Controller
{
    public function addNewsAction()
    {
        return $this->render('BackEndNewsBundle:main:add_news.html.twig', array(
            // ...
        ));
    }

    public function recoveringNewsAction()
    {
        return $this->render('BackEndNewsBundle:main:recovering_news.html.twig', array(
            // ...
        ));
    }

    public function deleteNewsAction()
    {
        return $this->render('BackEndNewsBundle:main:delete_news.html.twig', array(
            // ...
        ));
    }

}
