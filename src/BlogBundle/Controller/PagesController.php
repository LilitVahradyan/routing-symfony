<?php
namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PagesController extends Controller
{
    public function aboutAction(){
        return $this->render('@Blog/Pages/about.html.twig');
    }

    public function contactAction(){
        return $this->render('@Blog/Pages/contact.html.twig');
    }
    public function blankAction(){
        return $this->render('@Blog/Pages/blank.html.twig');
    }
}