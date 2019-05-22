<?php


namespace App\Form;


use App\Entity\UserReview;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserReviewEditForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
            ->add('username', TextType::class)
            ->add('e_mail', EmailType::class)
            ->add('user_homepage', TextType::class)
            ->add('user_review', TextType::class)

            ->add('submit', SubmitType::class, [
                'label' => 'Edit'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver) {

        $resolver->setDefaults(array(
            'data_class' => UserReview::class,
        ));
    }
}