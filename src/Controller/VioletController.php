<?php
// src/Controller/HomeController.php;
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VioletController extends AbstractController
{
    /**
     * @Route("/violet", name="violet")
     */
    public function home(): Response
    {
        return $this->render('profil/violet.html.twig');
    }
}