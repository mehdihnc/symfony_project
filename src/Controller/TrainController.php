<?php
// src/Controller/TrainController.php;
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TrainController extends AbstractController
{
    /**
     * @Route("/train", name="train")
     */
    public function train(): Response
    {
        
        return $this->render('train/train.html.twig');
    }
}