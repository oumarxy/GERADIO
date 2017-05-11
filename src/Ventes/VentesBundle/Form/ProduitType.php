<?php

namespace Ventes\VentesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduitType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
              //  ->add('categorieProduit', null, array('required'=>true, 'label' => 'Catégorie'))
                ->add('categorieProduit', null, array(
                    'placeholder' => 'Choisir une catégorie',
                    'label' => 'Catégorie',
                    'required' => true))
               // ->add('refProd', null, array('label' => 'Référence'))
                ->add('libelle', null, array('label' => 'Libelle'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ventes\VentesBundle\Entity\Produit'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ventes_ventesbundle_produit';
    }

}
