<?php

namespace Ventes\VentesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ApporteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomapporteur')
            ->add('prenomapporteur')
            ->add('telephone')
            ->add('email')
            ->add('fonction')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ventes\VentesBundle\Entity\Apporteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ventes_ventesbundle_apporteur';
    }
}
