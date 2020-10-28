<?php

namespace App\Controller\Admin;

use App\Entity\Attribution;
use App\Entity\Category;
use App\Entity\Client;
use App\Entity\Group;
use App\Entity\Item;
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
            MenuItem::section(),
            MenuItem::linkToCrud('Client', null, Client::class),
            MenuItem::linkToCrud('Group', null, Group::class),
            MenuItem::section(),
            MenuItem::linkToCrud('Item', null, Item::class),
            MenuItem::linkToCrud('Category', null, Category::class),
            MenuItem::section(),
            MenuItem::linkToCrud('Attribution', null, Attribution::class),
        ];
    }
}
