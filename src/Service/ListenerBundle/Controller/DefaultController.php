<?php

namespace Service\ListenerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('ServiceListenerBundle:Default:index.html.twig', array('name' => $id));
    }
}
