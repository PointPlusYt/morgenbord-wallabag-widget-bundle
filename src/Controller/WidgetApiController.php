<?php

namespace MorgenBord\WallabagWidgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WidgetApiController extends AbstractController
{
    #[Route('/widget/api', name: 'demo_widget_api')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/WidgetApiController.php',
        ]);
    }
}
