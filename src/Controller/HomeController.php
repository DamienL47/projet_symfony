<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// définition de la classe controller pour la page home
//ajout du extends AbstractController pour permettre l'héritage de classe
class HomeController extends AbstractController
{
    // création de la route pour lui affecter une méthode
    /**
     * @Route("/")
     */
// affectation de la méthode à la route pour informer le navigateur de ce qu'il doit afficher
    public function accueil()
    {
        //création de l'instance de classe
        $name = 'Damien';
        // lien vers le fichier twig qui renverra la vu demandée
        return $this->render("nom.html.twig", [
            //donne au fichier twig l'information à afficher
            'name' => $name
        ]);
    }
}