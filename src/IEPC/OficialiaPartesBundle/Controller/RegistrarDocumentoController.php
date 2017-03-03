<?php

namespace IEPC\OficialiaPartesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrarDocumentoController extends Controller
{
    public function indexAction()
    {
    	/*$em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('EMMUserBundle:User')->findAll();*/
        
        /*
        
        $res = 'Lista de usuarios: <br />';
        
        foreach($users as $user)
        {
            $res .= 'Usuario: ' . $user->getUsername() . ' - Email: ' . $user->getEmail() . '<br />';
        }
        
        return new Response($res);
        */
        
        //return $this->render('EMMUserBundle:User:index.html.twig', array('users' => $users));

        return $this->render('IEPCOficialiaPartesBundle:Default:index.html.twig');
    }
}
