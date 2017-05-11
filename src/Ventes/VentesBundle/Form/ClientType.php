<?php

namespace Ventes\VentesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', null, array('label'=>'Catégorie'))
            //->add('numero')
            ->add('nom', null, array('label'=>'Nom'))
            ->add('adresse', null, array('label'=>'Adresse'))
            ->add('telephone', null, array('label'=>'Téléphone'))
            ->add('mail', null, array('label'=>'Email'))
            ->add('siteweb', null, array('label'=>'Site Web'))
            ->add('activite', null, array('label'=>'Activité'))
            ->add('personneressource', null, array('label'=>'Personne ressource'))
            ->add('fonctionpersonres', null, array('label'=>'Fonction personne ressource'))
            ->add('telpersres', null, array('label'=>'Tel. Personne ressource'))
            ->add('apporteur', null, array('label'=>'Apporteur'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ventes\VentesBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ventes_ventesbundle_client';
    }
}
