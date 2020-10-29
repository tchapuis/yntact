<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Attribution;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class AttributionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Attribution::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('client'),
            AssociationField::new('item'),
            DateField::new('start'),
            DateField::new('end'),
        ];
    }

}
