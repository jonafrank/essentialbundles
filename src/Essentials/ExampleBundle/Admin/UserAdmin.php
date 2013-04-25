<?php

namespace Essentials\ExampleBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{
    protected function configureFormFields(FormMapper $form) 
    {
        $form->add('firstName', null, array('label' => 'First Name'))
            ->add('lastName', null, array('label' => 'Last Name'))
            ->add('dni', null, array('label' => 'DNI'))
            ->add('birthDate', 'birthday', array('label' => 'Birth Date'));
            
    }
    
    protected function configureDatagridFilters(DatagridMapper $filter) 
    {
        $filter->add('firstName')
                ->add('lastName')
                ->add('dni');
    }
    
    protected function configureListFields(ListMapper $list) 
    {
        $list->addIdentifier('dni')
                ->add('firstName')
                ->add('lastName')
                ->add('birthDate');
    }
}