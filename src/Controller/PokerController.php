<?php


namespace App\Controller;

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController
{
    /**
     * @Route("/poker", name="poker")
     */
    public function poker(){
        // Permet de récupérer les données des variables globales ($_GET, $_POST, $_COOKIE ...)
        $request = Request::createFromGlobals();
        $age = $request->query->get('age');
        if ($age >= 18){
            return new Response("Vous êtes autorisé à jouer sur cette page");
        }else{
            return new Response("Vous n'êtes pas autorisé à jouer au poker");
        }

    }

}