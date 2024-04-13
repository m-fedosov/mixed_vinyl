<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function Symfony\Component\String\u;

class VinylContoller
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('hi there');
    }

    #[Route('/browse/{genre}')]
    public function browser(?string $genre = null): Response
    {
        $genre ? $title = 'Genre: ' . u(str_replace('-', ' ', $genre))->title(true) : $title = 'All Genres';
        return new Response($title);
    }
}