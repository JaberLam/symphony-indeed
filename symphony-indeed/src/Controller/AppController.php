<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/app', name: 'app')]
    public function index(): Response
    {
        $job_list = [
            [
                "title" => "Offre 1",
                "city" => "Bordeaux",
                "type_contract" => "CDI/CDD/Freelance",
                "duration_contract" => "Temps plein, Temps partiel"
            ],
            [
                "title" => "Offre 2",
                "city" => "Bordeaux",
                "type_contract" => "CDI/CDD/Freelance",
                "duration_contract" => "Temps plein, Temps partiel"
            ],
            [
                "title" => "Offre 3",
                "city" => "Bordeaux",
                "type_contract" => "CDI/CDD/Freelance",
                "duration_contract" => "Temps plein, Temps partiel"
            ],
            [
                "title" => "Offre 4",
                "city" => "Bordeaux",
                "type_contract" => "CDI/CDD/Freelance",
                "duration_contract" => "Temps plein, Temps partiel"
            ]
        ];

        return $this->render(
            'app/index.html.twig',
            [
                "job_list" => $job_list
            ]
        );
    }
}
