<?php
/**
 * @package MyPlugin
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class PluginStyles extends BaseController 
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'my_enqueue_styles']);
        
    }
    function my_enqueue_styles()
    {
        wp_enqueue_style('customstyle', $this->plugin_url. 'pluginstyles.css');
    }
}