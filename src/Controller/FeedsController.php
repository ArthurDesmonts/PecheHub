<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedsController extends AbstractController
{
    #[Route('/feeds', name: 'app_feeds')]
    public function index(): Response
    {
        return $this->render('feeds/feeds.html.twig', [
            'controller_name' => 'FeedsController',
        ]);
    }


}
