<?php

namespace App\Controller\Admin;

use App\Entity\Property;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PropertyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Property::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('type');
        yield TextareaField::new('description');
        yield TextField::new('country');
        yield TextField::new('city');
        yield TextField::new('address');
        yield TextField::new('photos')->onlyOnIndex();
        yield TextField::new('videos')->onlyOnIndex();
        yield IntegerField::new('room_number');
        yield IntegerField::new('bathroom_number');
        yield IntegerField::new('floor_number');
        yield IntegerField::new('surface');
        yield IntegerField::new('price');
        yield TextField::new('payment_method');
        yield TextField::new('safety');
        yield BooleanField::new('is_main_slider');
        yield BooleanField::new('is_featured');   
        yield IntegerField::new('parking_available');
        yield IntegerField::new('bedroom_number');
    }

}
