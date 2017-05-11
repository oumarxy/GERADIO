<?php

namespace Gestion\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContratType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libcontrat',null,array("label"=>"Contrat"))
            ->add('dateentre','datetime',array("label"=>"Date d'entrée","widget"=>"single_text","date_format"=>"d-m-Y", "attr"=>array("class"=>"datetimepicker")))
            ->add('datefin','datetime',array("label"=>"Date de fin","widget"=>"single_text","date_format"=>"d-m-Y", "attr"=>array("class"=>"datetimepicker")))
            ->add('numcnps',null,array("label"=>"Numero Cnps"))
            ->add('datecnps','datetime',array("label"=>"Date cnps","widget"=>"single_text","date_format"=>"d-m-Y", "attr"=>array("class"=>"datetimepicker")))
			 ->add('file')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\GestionBundle\Entity\Contrat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestion_gestionbundle_contrat';
    }
}
