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
		$entityManager = $this->getDoctrine()->getManager();
		$post = $entityManager->getRepository('sBlogBundle:Posts')->findOneBy(['id'=>$id, 'postType'=>'post']);
		$postData['title'] = $post->getTitle();
		$postData['content'] = $post->getContent();
		$postData['excerpt'] = $post->getExcerpt();
		$postData['viewCount'] = $post->getViewCount();
		$postData['createdAt'] = $post->getCreatedAt()->format('Y-m-d H:i:s');

        return $this->render('@Blog/Post/post.html.twig',$postData );
    }

    public function getCategoryPostAction($slug){
        $entityManager = $this->getDoctrine()->getManager();
        $post = $entityManager->getRepository('BlogBundle:Categories')->findOneBy(['slug'=>$slug]);
        $postData['name'] = $post->getName();
        return $this->render('@Blog/Post/category.html.twig', $postData);
    }
	}