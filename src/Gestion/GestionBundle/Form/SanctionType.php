<?php

namespace Gestion\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SanctionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libsanction',null,array("label"=>"Sanction"))
            ->add('motif')
            ->add('explication')
            ->add('datesanction','datetime',array("label"=>"Date de sanction","widget"=>"single_text","date_format"=>"d-m-Y", "attr"=>array("class"=>"datetimepicker")))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\GestionBundle\Entity\Sanction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestion_gestionbundle_sanction';
    }
}
