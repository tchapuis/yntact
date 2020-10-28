<?php

namespace App\Controller\Admin\CRUD;

use App\Entity\Attribution;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AttributionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Attribution::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
