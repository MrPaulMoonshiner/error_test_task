<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserReview;
use App\Form\UserReviewForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserReviewController extends AbstractController
{



    /**
     * @Route("/user/review", name="user_review")
     */

    public function newReview(Request $request)
    {

        $user = new User();
        if( !$this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) ){
            $user = NULL;
        }else{
            $user = $this->getUser()->getId();
        }

        $ip = $this->container->get('request_stack')->getCurrentRequest()->getClientIp();
        $browser = $request->headers->get('User-Agent');

        $review = new UserReview();
        $form = $this->createForm(UserReviewForm::class, $review, ['ip'=>$ip ,'browser'=>$browser,'user_id'=>$user]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $review->getBrochure();
            if ($file != NULL) {
                $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
                // перемещает файл в каталог, где хранятся брошюры
                $file->move(
                    $this->getParameter('brochures_directory'),
                    $fileName
                );

                $review->setBrochure($fileName);
            }


            $em = $this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();


            return $this->redirectToRoute('app_homepage');

        $em = $this->getDoctrine()->getManager();
        $em->persist($review);

        $em->flush();
    }

        return $this->render(
        'task/review_form.html.twig',
        array(
            'form'  =>  $form->createView(),
            'ip'    =>  $ip,
            'browser' => $browser,
            'user_id' =>$user,

        )
    );
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() уменьшает схожесть имён файлов, сгенерированных
        // uniqid(), которые основанный на временных отметках
        return md5(uniqid());
    }

}
