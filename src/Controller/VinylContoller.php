<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function Symfony\Component\String\u;

class VinylContoller extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $params = [];
        $params['title'] = 'Мотивация надо поднять';
        $params['tracks'] = [
            ['by' => 'Bon Jovi', 'name' => 'It\'s my life'],
            ['by' => 'Kanye West', 'name' => 'Stronger'],
        ];
        return $this->render('vinyl/homepage.html.twig', $params);
    }

    #[Route('/browse/{genre}')]
    public function browser(?string $genre = null): Response
    {
        $genre ? $title = 'Genre: ' . u(str_replace('-', ' ', $genre))->title(true) : $title = 'All Genres';
        return new Response($title);
    }
}