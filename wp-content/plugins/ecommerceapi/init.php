<?php

/**
*@package ecommerceapi 
*/


namespace Inc;
Class init{
    public static function get_services(){
        return [
            Base\PluginStyles::class,
            Pages\AdminDashboard::class,
            Api\SettingsApi::class,
            Pages\AddproductDB::class
        ];
    }

    public static function register_services(){
        foreach(self::get_services() as $class){
            $service = self::instantiate($class);
            if (method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    private static function instantiate($class){
        $service = new $class;
        return $service;
    }
}