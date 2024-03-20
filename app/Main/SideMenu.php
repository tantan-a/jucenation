<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     */
    public static function menu(): array
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'dashboard-overview-1',
            ],
            'transactions' => [
                'icon' => 'activity',
                'title' => 'Transactions',
                'route_name' => 'transaction-list',
            ],
            'divider',
            'products' => [
                'icon' => 'box',
                'title' => 'Products',
                'route_name' => 'product-list',
            ],  
            'categories' => [
                'icon' => 'pocket',
                'route_name' => 'categories',
                'title' => 'Categories'
            ],
            'variants' => [
                'icon' => 'layers',
                'route_name' => 'categories',
                'title' => 'Variants'
            ],
            'divider',  
            'users' => [
                'icon' => 'users',
                'title' => 'Users',
                'route_name' => 'seller-list',
            ],
            'rewards' => [
                'icon' => 'gift',
                'title' => 'Rewards',
                'route_name' => 'seller-list',
            ],
        ];
    }
}
