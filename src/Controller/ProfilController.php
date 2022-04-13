<?php
// src/Controller/ProfilController.php;
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function profil(): Response
    {
        $dab = 'YO LA CITEE';
        return $this->render('profil/profil.html.twig', ['chibre' => $dab]);
    }
}
