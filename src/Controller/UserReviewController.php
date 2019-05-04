<?php

namespace App\Controller;

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

        $ip = $this->container->get('request_stack')->getCurrentRequest()->getClientIp();
        $browser = $request->headers->get('User-Agent');

        $review = new UserReview();
        $form = $this->createForm(UserReviewForm::class, $review, ['ip'=>$ip ,'browser'=>$browser]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            $em = $this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();


            return $this->redirectToRoute('user_registration');

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

        )
    );
    }

}
