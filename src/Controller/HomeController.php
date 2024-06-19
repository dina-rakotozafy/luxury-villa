<?php

namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PropertyRepository $propertyRepository): Response
    {
        $properties = $propertyRepository->findAll();

        return $this->render('home/index.html.twig', [
            'properties' => $properties,
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {

        return $this->render('pages/contact.html.twig');
    }
}
