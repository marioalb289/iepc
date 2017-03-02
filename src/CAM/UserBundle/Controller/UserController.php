<?php

namespace CAM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
    	return new Response('Bienvenido');
        //return $this->render('CAMUserBundle:Default:index.html.twig';
    }

    public function articlesAction($page)
    {

    	return new Response('Este es mi articulo No.'.$page);
    }
}
