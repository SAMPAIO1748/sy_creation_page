<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{

    private $articles = [
        1 => [
        "title" => "La vaccination c'est trop géniale",
        "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Libero ipsa ipsum sunt modi nesciunt officia, 
                        iste repellat quidem quae voluptatem quas animi, 
                        facilis voluptatibus quaerat eveniet, repellendus aut ullam delectus.",
        "id" => 1,
            "published" => true
        ],
        2 => [
            "title" => "La vaccination c'est pas trop géniale",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Repudiandae asperiores officiis corporis modi minima odio temporibus! 
                        Dicta dolorum eaque minima, suscipit et voluptates cumque 
                        veritatis recusandae corrupti ipsa blanditiis minus.",
            "id" => 2,
            "published" => true
        ],
        3 => [
            "title" => "Balkany c'est trop génial",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Porro eligendi asperiores doloremque aspernatur eum iure debitis commodi esse corporis tenetur? 
                        Ratione iste error veniam numquam. Esse totam sunt earum non?",
            "id" => 3,
            "published" => false
        ],
        4 => [
            "title" => "Balkany c'est pas trop génial",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Voluptas, error amet suscipit dolore accusantium possimus tempore, 
               ipsa deserunt voluptatem totam dolor explicabo placeat fugiat dolorum necessitatibus beatae neque velit adipisci.",
            "id" => 4,
            "published" => true
            ]
    ];

    /**
     * @Route("/articles", name="articleList")
     */
    public function articleList()
    {
        $list = $this->articles;
        //return new Response(print_r($list));
        return $this->render('articles.html.twig', ['list' => $list]);
    }

    // Système des wildcards
   /**
    * @Route("/article/{id}", name = "ArticleShow")
    */
   public function articleShow($id)
   {
       if(array_key_exists($id, $this->articles)){
           $article = $this->articles[$id];
           //return new Response("Titre de l'article : ".$article['title']);
           return $this->render('article.html.twig', ['article' => $article]);
       }else{
           return $this->redirectToroute('home');
       }

   }

}