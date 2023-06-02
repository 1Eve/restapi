<?php

/**
 * @package assessment7
 */

namespace Inc\Pages;

use Inc\Api\CallBacks\AdminCB;
use Inc\Base\BaseController;
use Inc\Api\SettingsApi;

class AdminDashboard extends BaseController
{
    public $settings_api;
    public $mainmenu;
    public $submenu;

    public $callbacks;

    public function __construct()
    { $this->callbacks = new AdminCB();
        $this->settings_api = new SettingsApi();

        $this->mainmenu = [
            'page_title' => 'Add Product',
            'menu_title' => 'Add Product',
            'capability' => 'manage_options',
            'menu_slug' => 'add_product',
            'callback' => [$this->callbacks, "Addproduct"],
            'icon_url' => 'dashicons-plus',
            'position' => 110
        ];

        $this->submenu = [
            [
                'parent_slug' => 'add_product',
                'page_title' => 'Update Product',
                'menu_title' => 'Update Products',
                'capability' => 'manage_options',
                'menu_slug' => 'update_product',
                'callback' => [$this->callbacks, "Updateproduct"]
            
            ]
        ];
    }

    // Register the admin pages and subpages
    public function register()
    {
        $this->settings_api->addPages([$this->mainmenu])->HasSubPage()->addSubPages($this->submenu)->register();
    }
}