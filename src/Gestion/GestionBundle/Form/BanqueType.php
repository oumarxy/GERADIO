<?php

namespace Gestion\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BanqueType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('libbanque', null, array("label" => "Banque"))
                ->add('dated', null, array("label" => "DAte debut"))
                ->add('datef', null, array("label" => "DAte fin"))
                //->add('salairecompoTable', 'collection', array("label" => "Composantes salaire"))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\GestionBundle\Entity\Banque'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gestion_gestionbundle_banque';
    }

}
