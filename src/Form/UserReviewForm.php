<?php


namespace App\Form;

use App\Entity\UserReview;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserReviewForm extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {



       $builder
           ->add('username', TextType::class)
           ->add('e_mail', EmailType::class)
           ->add('user_homepage', TextType::class)
           ->add('user_review', TextType::class)
//           ->add('pub_date',HiddenType::class)
           ->add('user_ip',HiddenType::class, array('data' => $options['ip']))
           ->add('user_browser',HiddenType::class,array('data' => $options['browser']));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => UserReview::class,
        ));
        $resolver->setRequired(['ip']);
        $resolver->setRequired(['browser']);


    }


}