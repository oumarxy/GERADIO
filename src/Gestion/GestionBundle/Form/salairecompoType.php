<?php

namespace Gestion\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class salairecompoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('composante')
            ->add('type', 'choice', array('choices' => array(
                        'Gain' => 'Gain',
                        'Retenue' => 'Retenue'
                    ),
                    'choices_as_values' => true,
                    'placeholder' => 'Choisir le type',
                    'label' => 'Type',
                    'required' => true))
            ->add('taux')
            ->add('montant',null,array("label"=>"Montant", "attr"=>array("class"=>"separateurMillier")))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\GestionBundle\Entity\salairecompo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestion_gestionbundle_salairecompo';
    }
}
