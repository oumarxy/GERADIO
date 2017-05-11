<?php

namespace Ventes\VentesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FactureType extends AbstractType {

    private $client;

    public function __construct($client = null) {
        $this->client = $client;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $client = $this->client;
        $builder
                ->add('numero')
                ->add('totalFacture')
                ->add('typeFacture')
                ->add('reduction', null, array('attr' => array('label' => 'Réduction', 'required' => true, 'class' => 'separateurMillier', 'min' => 0, 'value' => 0)))
                ->add('remise', null, array('label' => 'Rémise', 'attr' => array('class' => 'input separateurMillier', 'max' => 100, 'min' => 0, 'value' => 0)))
                ->add('tvafacture', null, array('label' => 'TVA Facture', 'attr' => array('class' => 'input separateurMillier', 'max' => 100, 'min' => 0, 'value' => 0)))
                ->add('dateFacture')
                ->add('etat')
                ->add('client')
                ->add('detailsProduits', 'collection', array('type' => new DetailsProduitsType($client),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'by_reference' => false))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ventes\VentesBundle\Entity\Facture'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ventes_ventesbundle_facture';
    }

}
