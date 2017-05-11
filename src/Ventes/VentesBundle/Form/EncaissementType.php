<?php

namespace Ventes\VentesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncaissementType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
              //  ->add('facture')
              //  ->add('date')
                ->add('mode', 'choice', array('choices' => array('Crédit' => 'credit', 'Au comptant' => 'comptant'),
                    'choices_as_values' => true,
                    'placeholder' => 'Choisir le mode de paiement',
                    'label' => 'Mode de paiement',
                ))
                ->add('destination', 'choice', array('choices' => array('Banque' => 'banque', 'Caisse' => 'caisse'),
                    'choices_as_values' => true,
                     'placeholder' => 'Choisir la destination',
                    'label' => 'Destination',
                ))
                ->add('montant', null, array('label' => 'Montant', 'attr'=>array('class'=>'separateurMillier')))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ventes\VentesBundle\Entity\Encaissement'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ventes_ventesbundle_encaissement';
    }

}
