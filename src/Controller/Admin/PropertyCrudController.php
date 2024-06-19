<?php

namespace App\Controller\Admin;

use App\Entity\Property;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PropertyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Property::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // set this option if you prefer the page content to span the entire
            // browser width, instead of the default design which sets a max width
            ->renderContentMaximized()
        ;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield ChoiceField::new('type', 'Type')->setChoices([
            'Appartement' => 'Appartement',
            'Villa' => 'Villa',
            'Penthouse' => 'Penthouse',
            'Duplex' => 'Duplex',
        ]);
        yield TextareaField::new('description', 'Déscription');
        yield CountryField::new('country', 'Pays');
        yield TextField::new('city', 'Ville');
        yield TextField::new('address', 'Adresse');
        yield ImageField::new('photos', 'Photos')
            ->setBasePath('public/uploads/')
            ->setUploadDir('public/uploads/images/')
            ->setUploadedFileNamePattern('[slug]-[timestamp].[extension]');;
        //yield TextField::new('videos', 'Fichier videos');
        yield IntegerField::new('room_number', 'Nb de chambre');
        yield IntegerField::new('bedroom_number', 'Nb de chambre à coucher');
        yield IntegerField::new('bathroom_number', 'Nb de salle de bain');
        yield IntegerField::new('floor_number', "Nb d'étage");
        yield IntegerField::new('surface', 'Surface (m²)');
        yield MoneyField::new('price', 'Prix')->setCurrency('USD');
        yield ChoiceField::new('payment_method', 'Mode de paiement')->setChoices([
            'Bank' => 'Bank',
            'Mobile Money' => 'Mobile Money',
            'Cryptomoney' => 'Cryptomoney',
        ])->renderExpanded();  
        yield IntegerField::new('parking_available', 'Parking disponible');
        yield ChoiceField::new('safety', 'Sécurité')->setChoices([
            '24/7' => '24/7',
            'No' => 'No',
        ]);
        /*yield BooleanField::new('is_main_slider', 'Slider Principal');
        yield BooleanField::new('is_featured', 'En vedette');   
        yield BooleanField::new('is_contract_ready', 'État du contrat'); */
    }

}
