<?php

namespace Ventes\VentesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Ventes\VentesBundle\Repository\ProduitRepository;

class DetailsProduitsType extends AbstractType {
    
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
                ->add('refProd')
                ->add('libelle', 'entity', array(
                    'class' => 'VentesBundle:Produit',
                    'empty_value' => 'Choisir un produit',
                    'query_builder' => function (ProduitRepository $er) use($client) {
                        return $er->ParClientFiltre($client);
                    },
                    'attr' => array('class' => 'ajaxProdOpt'))
                )
                ->add('prixHT', null, array('attr' => array('class' => 'separateurMillier')))
                ->add('quantite', null, array('attr' => array('min' => 1, 'value' => 1)))
        // ->add('facture')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Ventes\VentesBundle\Entity\DetailsProduits'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'ventes_ventesbundle_detailsproduits';
    }

}
