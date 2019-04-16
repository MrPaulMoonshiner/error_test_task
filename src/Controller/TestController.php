<?php
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class TestController
{
    /**
     * @Route("/")
     */
	public function homepage()
	{
		return new Response('Woohoo! First page alredy!');
	}

    /**
     * @Route("/news/{slug}/")
     */
	public function show($slug)
    {
        return new Response(sprintf('Feature page: %s',
            $slug
        ));
    }

}