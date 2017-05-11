<?php

namespace Gestion\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmployeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('etude')
                ->add('grade')
                ->add('service')
                ->add('fonction')
                ->add('nomemp')
                ->add('prenomemp')
                ->add('matemp')
                ->add('genremp', 'choice', array('required' => false, 'choices' => array(
                        'Masculin' => 'Masculin',
                        'Feminin' => 'Feminin'
                    ),
                    'choices_as_values' => true,
                    'placeholder' => 'Choisir le genre',
                    'label' => 'Flux',
                    'required' => true))
                ->add('natemp')
                ->add('dobemp', 'datetime', array("label" => "Date de sanction", "widget" => "single_text", "date_format" => "d-m-Y", "attr" => array("class" => "datetimepicker")))
                ->add('lieuemp')
                ->add('civilitemp', 'choice', array('required' => false, 'choices' => array(
                        'Monsieur' => 'Monsieur',
                        'Madame' => 'Madame',
                        'Mademoiselle' => 'Mademoiselle'
                    ),
                    'choices_as_values' => true,
                    'placeholder' => 'Choisir la civilité',
                    'label' => 'Flux',
                    'required' => true))
                ->add('statuemp')
                ->add('adressemp')
                ->add('nbreftemp', null, array('required'=>true, 'attr'=>array('min'=>0, 'value'=>0)))
                ->add('telemp')
                ->add('celemp')
                ->add('emailemp')
                ->add('perscont')
                ->add('telpers')
                ->add('celpers')
                ->add('filiationemp')
                ->add('salbase', null, array("attr" => array("class" => "separateurMillier")))
                ->add('file')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gestion\GestionBundle\Entity\Employe'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'gestion_gestionbundle_employe';
    }

}
