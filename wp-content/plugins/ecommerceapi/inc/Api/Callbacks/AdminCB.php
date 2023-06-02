<?php
/**
 * @package MyPlugin
 */

namespace Inc\Api\CallBacks;

use Inc\Base\BaseController;

class AdminCB extends BaseController
{
    public function Addproduct(){
        return require_once $this->plugin_path.'templates/Addproduct.php'; 
    }

    public function Updateproduct(){
        return require_once $this->plugin_path.'templates/Updateproduct.php'; 
    }
}