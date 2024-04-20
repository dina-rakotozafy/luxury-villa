<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PropertyRepository;


class PropertyController extends AbstractController
{
    #[Route('/properties', name: 'properties')]
    public function all_properties(PropertyRepository $propertyRepository): Response
    {
        $properties = $propertyRepository->findAll();

        return $this->render('property/properties.html.twig', [
            'properties' => $properties,
        ]);
    }

    #[Route('/property-details/{id}', name: 'property_details')]
    public function details(PropertyRepository $propertyRepository, int $id): Response
    {

        $property = $propertyRepository
            ->find($id);

        return $this->render('property/property-details.html.twig', [
            'property' => $property
        ]);
    }
}
