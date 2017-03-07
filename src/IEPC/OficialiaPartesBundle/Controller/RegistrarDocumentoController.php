<?php

namespace IEPC\OficialiaPartesBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use IEPC\OficialiaPartesBundle\Entity\Recepciones;
use IEPC\OficialiaPartesBundle\Entity\Documentos;
use IEPC\OficialiaPartesBundle\Form\RecepcionesType;
use IEPC\OficialiaPartesBundle\Models\Document;

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
        // print_r($request);exit;
       /* $image = $request->files->get('archivo');
        print_r($image);exit;*/

        


        $recepciones = new Recepciones();
        $form = $this->createCreateForm($recepciones);
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            /*$password = $form->get('password')->getData();
            
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $password);
            
            $user->setPassword($encoded);*/

            $image = $request->files->get('archivo');

            if (($image instanceof UploadedFile) && ($image->getError() == '0')) 
            {
               $originalName = $image->getClientOriginalName();
               $name_array = explode('.', $originalName);
               $file_type = $name_array[sizeof($name_array) - 1];
               $valid_filetypes = array('pdf');
               if(in_array(strtolower($file_type), $valid_filetypes))
               {
                 $document = new Document();
                 $document->setFile($image);
                 $document->setSubDirectory('archivos');
                 $document->processFile();
                 //die("todo ok");
                 //hago el upload
                   $docs = new Documentos();
                   $docs->setNombre($image->getBasename());
                   $docs->setRespuesta(1);
                   $docs->setRuta("aqui ruta");
                   $docs->setCreatedBy(1);
                   $docs->setUpdatedBy(1);
                
                   $em = $this->getDoctrine()->getManager();
                   $em->persist($docs);
                   $em->flush();
                   //redireccino
                    

                    //Se guarda datos de recepcion
                    $recepciones->setCreatedBy(1);
                    $recepciones->setUpdatedBy(1);
                    $recepciones->setAsuntoReceptor("Sin Asunto");
                    
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($recepciones);
                    $em->flush();
                    $this->addFlash('mensaje', 'Archivo subido con éxito');
                   //redirecciono        
                   return $this->redirectToRoute('iepc_oficialia_partes_index');
               }
               else
               {
                    $this->addFlash('error', 'Solo se permiten archivos PDF');
                   //redirecciono        
                   return $this->redirectToRoute('iepc_oficialia_partes_index');
               }
               
            }else
            {
               $this->addFlash('error', 'Error al Subir el archvi');
               //redirecciono        
               return $this->redirectToRoute('iepc_oficialia_partes_index');
               //die("no entró o se produjo algún error inesoperado");
            }
        }
        
         return $this->render('IEPCOficialiaPartesBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
}
