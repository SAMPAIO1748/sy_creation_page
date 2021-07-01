<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/list", name="list")
     */
    public function list (){
        return new Response("Liste d'articles");
    }

}