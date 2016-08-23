<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class adminController extends baseController
{
    /**
     * @Route("/admin", name="admin_front")
     */
    public function indexAction()
    {
        return $this->render('admin/front.html.twig', array());
    }

    /**
     * @Route("admin/login", name="admin_login")
     */
    public function loginAction(){
        return $this->render('admin/login.html.twig', array());
    }

    /**
     * @Route("/admin/posts", name="admin_list_posts")
     */
    public function listPostsAction(){
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
        return $this->render('admin/list_posts.html.twig', array('articles' => $articles));
    }

    /**
     * @Route("/admin/post/{postId}", name="admin_post")
     */
    public function showPostAction($postId) {
        $postTitle = 'Blog post '.$postId;
        $postDescription = 'This is the '.$postId.' blog post that was made';
        $postDateAdded = '0'.$postId.'-09-2016';

        $article = [
            ['id' => $postId, 'title' => $postTitle, 'description' => $postDescription, 'dateAdded' => $postDateAdded]
        ];
        return $this->render('admin/show_post.html.twig', array('article' => $article, 'title' => $postTitle));
    }

    /**
     * @Route("/admin/users", name="admin_list_users")
     */
    public function listUsersAction(){
        $users = [
            ['id' => 1, 'username' => 'user 1', 'admin' => true, 'email' => 'demo1@demo.com'],
            ['id' => 2, 'username' => 'user 2', 'admin' => false, 'email' => 'demo2@demo.com'],
            ['id' => 3, 'username' => 'user 3', 'admin' => false, 'email' => 'demo3@demo.com']
        ];
        return $this->render('admin/list_users.html.twig', array('users' => $users));
    }

    /**
     * @Route("/admin/profile", name="admin_proifle")
     */
    public function profileAction(){
        return $this->render('admin/profile.html.twig');
    }

    /**
     * @Route("/admin/logout", name="admin_logout")
     */
    public function logoutAction(){
        return $this->render('home/home.html.twig');
    }
}
