<?php

namespace Ventes\VentesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OperationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('flux', 'choice', array('choices' => array(
                        'Entrée' => 'Entrée',
                        'Sortie' => 'Sortie'
                    ),
                    'choices_as_values' => true,
                    'placeholder' => 'Choisir le flux',
                    'label' => 'Flux',
                    'required' => true))
                ->add('nature', 'choice', array( 'required'=>false, 'choices' => array(
                        'Espèce' => 'Espèce',
                        'Bien' => 'Bien',
                    ),
                    'choices_as_values' => true,
                    'placeholder' => 'Choisir la nature',
                    'label' => 'Nature',
                    'required' => true))
                ->add('dateOperation', 'datetime', array('widget' => 'single_text', 'date_format' => 'dd-MM-yyyy',
                    'attr' => array('class' => 'form-control datetimepicker')
                ))
                ->add('nom', null, array('label' => 'Nom'))
                ->add('fonctionpersonres', null, array('label' => 'Fonction'))
                ->add('telephone', null, array('label' => 'Téléphone'))
                ->add('montant', null, array('label' => 'Valeur', 'required'=>false, 'attr' => array('class' => 'separateurMillier')))
                ->add('libelle', null, array('label' => 'Motif'))
                ->add('description', 'ckeditor', array(
                    'config' => array('toolbar' => 'standard'),
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ventes\VentesBundle\Entity\Operation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ventes_ventesbundle_operation';
    }

}
