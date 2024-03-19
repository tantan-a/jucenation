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
            'e-commerce' => [
                'icon' => 'shopping-bag',
                'title' => 'E-Commerce',
                'sub_menu' => [
                    'categories' => [
                        'icon' => 'activity',
                        'route_name' => 'categories',
                        'title' => 'Categories'
                    ],
                    'products' => [
                        'icon' => 'activity',
                        'title' => 'Products',
                        'route_name' => 'product-list',
                    ],
                    'transactions' => [
                        'icon' => 'activity',
                        'title' => 'Transactions',
                        'route_name' => 'transaction-list',
                    ],
                ]
            ],
            'divider',  
            'users' => [
                'icon' => 'users',
                'title' => 'Users',
                'route_name' => 'seller-list',
            ],
        ];
    }
}
