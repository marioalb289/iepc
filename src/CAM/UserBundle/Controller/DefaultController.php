<?php

namespace CAM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CAMUserBundle:Default:index.html.twig',array('name' => $name));
    }
}
