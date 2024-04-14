<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function Symfony\Component\String\u;

class VinylContoller extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        $params = [];
        $params['tracks'] = [
            ['by' => 'nProfessor', 'name' => 'Мы пилили монолит'],
        ];
        return $this->render('vinyl/homepage.html.twig', $params);
    }

    #[Route('/browse/{genre}', name: 'app_browse')]
    public function browse(?string $genre = null): Response
    {
        $genre ? $title = u(str_replace('-', ' ', $genre)) : $title = null;
        $params = ['title' => $title];
        return $this->render('vinyl/browse.html.twig', $params);
    }
}
