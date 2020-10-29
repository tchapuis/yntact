<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Client::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('firstname'),
            TextField::new('lastname'),
            EmailField::new('email'),
            DateField::new('birthdate')->hideOnIndex(),
            TextField::new('address')->hideOnIndex(),
            TextField::new('postcode')->hideOnIndex(),
            TextField::new('city')->hideOnIndex(),
            CountryField::new('country')
                ->hideOnIndex(),
            TelephoneField::new('phone')->hideOnIndex(),
            DateTimeField::new('updatedAt')->hideOnForm(),
            AssociationField::new('groups'),
            AssociationField::new('attributions')->hideOnIndex(),
            BooleanField::new('enabled'),

        ];
    }

}
