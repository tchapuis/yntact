<?php

namespace App\Controller\Admin;

use App\Entity\Attribution;
use App\Entity\Category;
use App\Entity\Client;
use App\Entity\Group;
use App\Entity\Item;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Yntact');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
            MenuItem::section('Clients'),
            MenuItem::linkToCrud('Client', 'fas fa-user', Client::class),
            MenuItem::linkToCrud('Group', 'fas fa-users', Group::class),
            MenuItem::section('Items'),
            MenuItem::linkToCrud('Item', 'fas fa-hdd', Item::class),
            MenuItem::linkToCrud('Category', 'fas fa-folder', Category::class),
            MenuItem::section('Attributions'),
            MenuItem::linkToCrud('Attribution', 'fas fa-user-tag', Attribution::class),
            MenuItem::section('Admins'),
            MenuItem::linkToCrud('Users', 'fas fa-user-secret', User::class)
                ->setPermission('ROLE_SUPER_ADMIN'),
        ];
    }
}
