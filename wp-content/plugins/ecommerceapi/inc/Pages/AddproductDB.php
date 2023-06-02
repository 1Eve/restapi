<?php

/**
*@package ecommerceapi 
*/


namespace Inc\Pages;
//security check 
if(!defined('ABSPATH')){
    echo 'File not found';
    exit;
}

class AddproductDB{
    function register(){
        $this->add_product_to_db();
        $this->enter_product_to_db();
    }
    function enter_product_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'products';

        $product_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            product_name text NOT NULL,
            product_description text NOT NULL

        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($product_details);
    }

    function add_product_to_db(){
        if(isset($_POST[''])){
            $data =[
                'product_name'=> $_POST['ProductName'],
                'product_description'=> $_POST['ProductDescription'],   
            ];

            global $wpdb;
            global $successmessage;
            global $errormessage;

            $successmessage = false;
            $errormessage = false;

            $table_name = $wpdb->prefix.'products';

            $result = $wpdb->insert($table_name, $data, $format=NULL);

            if($result == true){
                $successmessage = true;
            }else{
                $errormessage = true;
            }
        }
    }

   
    }
    



