<?php
// src/Controller/HomeController.php;
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        $aff= "Hell ";
        return $this->render('home/home.html.twig', ['hell' => $aff]);
    }
}
