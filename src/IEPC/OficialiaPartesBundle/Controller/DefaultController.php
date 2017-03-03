<?php

namespace IEPC\OficialiaPartesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IEPCOficialiaPartesBundle:Default:index.html.twig');
    }
}
