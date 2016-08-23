<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class homeController extends baseController
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $articles = [
            [
                'id' => 1,
                'title' => 'Blog post 1',
                'description' => 'This is the first blog post that was made',
                'dateAdded' => '01-09-2016',
            ],
            [
                'id' => 2,
                'title' => 'Blog post 2',
                'description' => 'This is the second blog post that was made',
                'dateAdded' => '02-09-2016',
            ],
            [
                'id' => 3,
                'title' => 'Blog post 3',
                'description' => 'This is the third blog post that was made',
                'dateAdded' => '03-09-2016',
            ],
        ];

        return $this->render('home/home.html.twig', array('articles' => $articles));
    }
}
