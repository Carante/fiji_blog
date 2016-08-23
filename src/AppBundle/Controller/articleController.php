<?php
/**
 * Created by PhpStorm.
 * User: KaiserDesign
 * Date: 22/08/2016
 * Time: 18:56
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class articleController extends baseController
{
    /**
     * @Route("/article/{articleId}", name="show_article")
     */
    public function showAction($articleId)
    {
        $postTitle = 'Blog post '.$articleId;
        $postDescription = 'This is the '.$articleId.' blog post that was made';
        $postDateAdded = '0'.$articleId.'-09-2016';

        $article = [
            [
                'id' => $articleId,
                'title' => $postTitle,
                'description' => $postDescription,
                'dateAdded' => $postDateAdded,
            ],
        ];

        return $this->render('article/show.html.twig', array('article' => $article, 'title' => $postTitle));
    }

    /**
     * @Route("/articles", name="article_list")
     */
    public function listAction()
    {
        return $this->render('article/list.html.twig', array());
    }
}