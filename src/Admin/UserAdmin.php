<?php


namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserAdmin extends AbstractAdmin
{
    protected  $baseRouteName = "user_admin";
    protected  $baseRoutePattern = "user";
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id', IntegerType::class)
            ->add('username', TextType::class)
            ->add('email', TextType::class)
            ->add('active', CheckboxType::class,
                [
                    'label'    => 'Activate',
                    'required' => true,
                    'required' => false,

                ])
        ;


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('username')
            ->add('email')
            ->add('active')
        ;

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('username')
            ->addIdentifier('email')
            ->addIdentifier('active')
        ;
    }
}