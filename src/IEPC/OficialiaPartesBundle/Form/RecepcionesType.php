<?php

namespace IEPC\OficialiaPartesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecepcionesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombreEmisor')
        ->add('institucionEmisor')
        ->add('asuntoEmisor')
        //->add('asuntoReceptor')
        ->add('respuesta', 'checkbox')
        ->add('save', 'submit', array('label' => 'Guardar Regstro'));
    }

    
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IEPC\OficialiaPartesBundle\Entity\Recepciones'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'recepciones';
    }


}
