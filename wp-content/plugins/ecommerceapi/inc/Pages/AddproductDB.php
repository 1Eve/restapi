<?php
/**
 * @package MyPlugin
 */

 namespace Inc\Pages;

 use Inc\Api\CallBacks\AdminCB;
 use Inc\Base\BaseController;
 use Inc\Api\SettingsApi;
 
namespace Inc\Pages;
//security check 
if(!defined('ABSPATH')){
    echo 'File not found';
    exit;
}



global $namespace;
$namespace = 'projects/v1';

  class AddproductDB{

    function register(){
        $this->create_project();
    }

    public function create_project(){
        global $wpdb;
        $table = $wpdb->prefix . 'products';
        $project_info = "CREATE TABLE IF NOT EXISTS " . $table . "(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            product_name text NOT NULL,
            product_description text NOT NULL
        );";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($project_info);
    }

  }
  
  $controller = new AddproductDB();
  register_activation_hook(__FILE__, array($controller, 'activate'));

  add_action('rest_api_init', 'pms_routes');
  function pms_routes(){
    

    $project_routes = new ProjectRoute();
    $project_routes->register_routes();
  }



