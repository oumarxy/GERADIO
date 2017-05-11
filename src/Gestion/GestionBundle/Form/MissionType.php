<?php

namespace Gestion\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MissionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datedept','datetime',array("label"=>"Date de sanction","widget"=>"single_text","date_format"=>"d-m-Y", "attr"=>array("class"=>"datetimepicker")))
            ->add('dateretour','datetime',array("label"=>"Date de sanction","widget"=>"single_text","date_format"=>"d-m-Y", "attr"=>array("class"=>"datetimepicker")))
            ->add('destination')
            ->add('mission')
            ->add('description')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\GestionBundle\Entity\Mission'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestion_gestionbundle_mission';
    }
}
