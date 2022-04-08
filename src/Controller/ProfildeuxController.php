<?php
// src/Controller/HomeController.php;
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfildeuxController extends AbstractController
{
    /**
     * @Route("/", name="profildeux")
     */
    public function home(): Response
    {
        return $this->render('profildeux/profildeux.html.twig');
    }
}