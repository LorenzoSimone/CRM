<?php

namespace Webworks\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SystemModuleType extends AbstractType
{

    private $action;

    public function __construct($action) {
        $this->action = $action;
    }

        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setAction($this->action);
        $builder->setMethod('POST');

        $builder
            ->add('menuItemText', 'text', array(
                'required'      => true,
            ))
            ->add('active', 'checkbox', array(
                'read_only'      => true,
                'required'      => true,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Webworks\AdminBundle\Entity\SystemModule'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webworks_adminbundle_systemmodule';
    }
}
