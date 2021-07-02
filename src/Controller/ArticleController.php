<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/articles", name="articleList")
     */
    public function articleList()
    {
        return new Response("Liste d'articles du super site de la mort qui tue");
    }

    // Système des wildcards
   /**
    * @Route("/article/{id}", name = "ArticleShow")
    */
   public function articleShow($id)
   {
       return new Response("Article n°".$id);
   }



}