<?php 
	namespace BlogBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	class PostController extends Controller
	{
		public function indexAction($name)
    {
        return $this->render('@Blog/Post/post.html.twig', ['name' => $name]);
    }

    public function getSinglePostAction($id){
        return $this->render('@Blog/Post/post.html.twig');
    }

    public function getCategoryPostAction($id){
        return $this->render('@Blog/Post/category.html.twig');
    }
	}