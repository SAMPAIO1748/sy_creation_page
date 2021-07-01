<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/", name="home")
     */
    public function home(){

        // Je retourne une réponse HTTP valide en utilisant
        // la class Response du composant HttpFoundation
        return new Response('Accueil du super site de la mort qui tue');
    }

    /**
     * @Route("/legal", name="legal")
     */
    public function legal(){
        return new Response('Mentions légales du super site de la mort qui tue');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(){
        $request = Request::createFromGlobals();
        $age = $request->query->get('age');
        if ($age >= 18){
            return new Response("Vous êtes autorisé à lire cette page");
        }else{
            return new Response("Vous n'êtes pas autorisé à lire cette page");
        }



    }

}