<?php
/**
 * Plugin Name: Ecommerce REST API
 * Plugin URI: http:..........
 * Description: REST API functionality for Ecommerce.
 * Version: 1.0.0
 * Author: Patrick Mwaniki
 * Author URI: http:.........
 * License: GPL v2 or later
 */
use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Initialize;

// security check
if(!defined('ABSPATH')){
    echo 'File not found';
    exit;
}

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');
}

function activatePlugin()
{
    Inc\Base\Activate::activatePlugin();
}
//Deactivate my plugin
function DeactivatePlugin()
{
    Inc\Base\Deactivate::deactivatePlugin();
}
register_activation_hook(__FILE__, 'activatePlugin');
register_deactivation_hook(__FILE__, 'DeactivatePlugin');



if(class_exists('Inc\\Initialize')){
    Inc\Initialize::register_services(); 
}
