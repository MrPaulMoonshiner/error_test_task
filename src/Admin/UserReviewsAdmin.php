<?php


namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserReviewsAdmin extends AbstractAdmin
{
    protected  $baseRouteName = "user_reviews";
    protected  $baseRoutePattern = "reviews";
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', TextType::class)
            ->add('e_mail', TextType::class)
            ->add('user_homepage', TextType::class)
            ->add('user_review', TextType::class)
            ->add('user_ip', TextType::class)
            ->add('user_browser', TextType::class);


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username')
                        ->add('e_mail')
                        ->add('user_homepage')
                        ->add('user_review')
                        ->add('user_ip')
                        ->add('user_browser');


    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                    ->addIdentifier('username')
                    ->addIdentifier('e_mail')
                    ->addIdentifier('user_homepage')
                    ->addIdentifier('user_review')
                    ->addIdentifier('user_ip')
                    ->addIdentifier('user_browser');
    }
}