<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExambleController extends AbstractController
{
    #[Route('/examble', name: 'examble')]
    public function index()
    {
        return $this->render('examble.html.twig');
    }
}