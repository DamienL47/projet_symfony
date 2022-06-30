<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// définition de la classe controller pour la page home
class HomeController
{
    // création de la route pour lui affecter une méthode
    /**
     * @Route("/")
     */
// affectation de la méthode à la route pour informer le navigateur de ce qu'il doit afficher
    public function accueil()
    {
        return new Response('Bonjour');
    }
}