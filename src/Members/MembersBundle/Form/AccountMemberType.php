<?php

namespace Members\MembersBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class AccountMemberType extends BaseType {

    public function __construct() {
        parent::__construct("AccountMember");
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
                // ->add('status')
                ->add('enabled', null, array('attr' => array('checked' => 'checked'), 'label' => 'Activer'))
                ->add('roles', 'choice', array('choices' => array(
                        "ADMIN" => "ROLE_ADMIN",
                        "COMPTABLE" => "ROLE_COMPTABLE",
                        "COMMERCIAL" => "ROLE_COMMERCIAL",
                    ),
                    'choices_as_values' => true,
                    'multiple' => true,
                    'expanded' => true,
        ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Members\MembersBundle\Entity\AccountMember'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'members_membersbundle_AccountMember';
    }

}
