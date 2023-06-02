<?php
/**
 * @package MyPlugin
 */

namespace Inc\Pages;

use Inc\Base\BaseController;
use Inc\Api\SettingsApi;
use \Inc\Api\CallBacks\AdminCB;

class AdminDashboardCB extends BaseController
{
    public $mainmenu;
    public $settings_api;
    public function __construct()
    {
        $this->mainmenu = [
            [
                'page_title' => 'Create Product',
                'menu_title' => 'Create Product',
                'capability' => 'manage_options',
                'menu_slug' => 'create_product',
                'callback' => [$this, 'createProductsPage'],
                'icon_url' => 'dashicons-plus',
                'position' => 110
            ],
            [
                'page_title' => 'View Employees',
                'menu_title' => 'View Employees',
                'capability' => 'manage_options',
                'menu_slug' => 'view_employees',
                'callback' => [$this, 'updateProductsPage'],
            ]
        ];
    }

    public function register()
    {
        $this->settings_api = new SettingsApi();
        $this->settings_api->addPages($this->mainmenu)->register();
        
    }

    public function createProductsPage()
    {

        echo '<h1>Create Product Page</h1>';
     
    }

    public function updateProductsPage()
    {
       
        echo '<h1>View Products Page</h1>';
      
    }
}