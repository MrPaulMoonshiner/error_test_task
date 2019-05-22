<?php

namespace App\Controller;

use App\Entity\UserReview;
use App\Form\UserReviewEditForm;
use App\Form\UserReviewDeleteForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArchiveController extends AbstractController
{
    /**
     * @Route("/archive", name="archive")
     */
    public function index()
    {
        if( !$this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) ){
            return $this->redirectToRoute('app_homepage');
        }else{
            $user = $this->getUser()->getId();
            $username = $this->getUser()->getUsername();

        }


        $review = $this->getDoctrine()->getRepository(UserReview::class);
        $get=$review ->findBy(['user_id' => $user]);
        if($get == NULL){
           return $this->redirectToRoute('not_found');
        }
        return $this->render('archive/index.html.twig', [
            'user'=>$user,
            'review'=>$get,
            'username'=>$username,
        ]);
    }
    /**
     * @Route("/archive/{id}/edit", name="arc_edit", requirements={"id"="\d+"})
     *
     */
    public function editReview($id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(UserReview::class);
        $comment = $repo->find($id);
        if(!$comment)
            return $this->redirectToRoute('app_homepage');

        $form = $this->createForm(UserReviewEditForm::class, $comment );
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('archive', [ 'id' => $comment->getId() ]);
        }
        return $this->render('archive/edit_u_r.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/archive/{id}/dell", name="arc_delete")
     */
    public function removeReview($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(UserReview::class);
        $comment = $repo->find($id);
        if(!$comment)
            return $this->redirectToRoute('app_homepage');

        $form = $this->createForm(UserReviewDeleteForm::class, null, [
            'delete_id' => $comment->getId()
        ] );

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em->remove($comment);
            $em->flush();
            return $this->redirectToRoute('archive');
        }
        return $this->render('archive/delete_u_r.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
