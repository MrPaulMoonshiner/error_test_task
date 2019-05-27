<?php


namespace App\Controller;

use App\Form\UserRegister;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        // 1) постройте форму
        $user = new User();
        $form = $this->createForm(UserRegister::class, $user);

        // 2) обработайте отправку (произойдёт только в POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $check_username = $this->getDoctrine()->getRepository(User::class)->findOneBy(['username' => $user->getUsername()]);
            $check_mail = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
//            var_dump($user->getUsername());exit;
            if(!$check_username && !$check_mail){
            // 3) Зашифруйте пароль (вы также можете сделать это через слушатель Doctrine)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) сохраните Пользователя!
            $em = $this->getDoctrine()->getManager();
            $user->setRoles(['ROLE_USER']);
            $em->persist($user);
            $em->flush();
            }
            else{
                $error ='Username or e-mail already exists.';
//                throw new CustomUserMessageAuthenticationException('Username already exists.');
                return $this->render(
                    'task/test.html.twig',
                    array('form' => $form->createView(),
                        'error' => $error
                    )
                );

            }
            // ... сделайте любую другую работу - вроде отправки письма и др
            // может, установите "флеш" сообщение об успешном выполнении для пользователя

            return $this->redirectToRoute('user_registration');
        }

        return $this->render(
            'task/test.html.twig',
            array('form' => $form->createView(),
                'error' => NULL)
        );
    }
}