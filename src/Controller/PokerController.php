<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController
{
    /**
     * @Route("/poker", name="poker")
     */                     //autowire
    public function poker(Request $request)
    {
        // Permet de récupérer les données des variables globales ($_GET, $_POST, $_COOKIE ...)
        // $request = Request::createFromGlobals();
        $age = $request->query->get('age');
        if ($age >= 18){
            //return new Response("Vous êtes autorisé à jouer sur cette page");
            // Retourne une page html
            return $this->render('poker.html.twig');
        }else{
            //return new Response("Vous n'êtes pas autorisé à jouer au poker");
            //return $this->redirectToroute('enfant');
            // Retourne une page html
            return $this->render('enfant.html.twig');
        }

    }

    /**
     * @Route("/enfant", name="enfant")
     */
    public function enfant(){
        return new Response("Retourne chez ta mère");
    }

}