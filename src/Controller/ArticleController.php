<?php
namespace App\Controller;
use App\Entity\UserReview;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
	public function homepage(Request $request)
	{
	    $title = "Welcome!";
	    return $this->render('task/homepage.html.twig',[
	        'title' => $title,
        ]);
	}

    /**
     * @Route("/news/", name="app_yop")
     */
	public function show(Request $request, PaginatorInterface $paginator)
    {
//        $get_review = $this->getDoctrine()
//            ->getRepository(UserReview::class);
//
//        $get = $get_review ->findAll();


        $repository = $this->getDoctrine()->getRepository(UserReview::class);


        return $this->render('task/reviews.html.twig',[
//            'review' => $get,
            'pagination' => $paginator->paginate(
                $repository ->findAll(array('id' => 'DESC')),
                $request->query->getInt('page', 1),25)

        ]);

        //return new Response('Check out this great product: '.$get_review->getName());

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }






}


