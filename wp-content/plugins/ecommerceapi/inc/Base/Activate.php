<?php

/**
*@package ecommerceapi 
*/


namespace Inc\Base;
class Activate{
   static function activatePlugin(){
       flush_rewrite_rules();
   }
}