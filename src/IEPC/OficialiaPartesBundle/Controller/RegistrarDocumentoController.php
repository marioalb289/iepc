<?php

namespace IEPC\OficialiaPartesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use IEPC\OficialiaPartesBundle\Entity\Recepciones;
use IEPC\OficialiaPartesBundle\Form\RecepcionesType;

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

        $rd = new Recepciones();
        $form = $this->createCreateForm($rd);
        
        //return $this->render('EMMUserBundle:User:add.html.twig', array('form' => $form->createView()));

        return $this->render('IEPCOficialiaPartesBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(Recepciones $entity)
    {
        $form = $this->createForm(new RecepcionesType(), $entity, array(
                'action' => $this->generateUrl('iepc_oficilia_partes_create'),
                'method' => 'POST'
            ));
        
        return $form;
    }

    public function createAction(Request $request)
    {   
        $recepciones = new Recepciones();
        $form = $this->createCreateForm($recepciones);
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            /*$password = $form->get('password')->getData();
            
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $password);
            
            $user->setPassword($encoded);*/

            $recepciones->setCreatedBy(1);
            $recepciones->setUpdatedBy(1);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($recepciones);
            $em->flush();
            
            return $this->redirectToRoute('iepc_oficialia_partes_index');
        }
        
         return $this->render('IEPCOficialiaPartesBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
}
