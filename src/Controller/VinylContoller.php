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
        $params['title'] = 'Мотивация надо поднять';
        $params['tracks'] = [
            ['by' => 'Bon Jovi', 'name' => 'It\'s my life'],
            ['by' => 'Kanye West', 'name' => 'Stronger'],
            ['by' => 'Gangsta\'s Paradise', 'name' => 'Coolio'],
            ['by' => 'Waterfalls', 'name' => 'TLC'],
            ['by' => 'Creep', 'name' => 'TLC'],
            ['by' => 'Kiss from a Rose', 'name' => 'Seal'],
            ['by' => 'On Bended Knee', 'name' => 'Boyz II Men'],
            ['by' => 'Fantasy', 'name' => 'Mariah Carey'],
            ['by' => 'Take a Bow', 'name' => 'Madonna'],
            ['by' => 'Another Night', 'name' => 'Real McCoy'],
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