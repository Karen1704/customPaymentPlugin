<?php
/*
Plugin Name: Custom  Payment Gateway
Description: Custom  Payment Gateway for WooCommerce
Version: 1.0
Author: Karen Ghalachyan
Author URI https://www.linkedin.com/in/karen-ghalachyan-15057118a/
*/


//  Here is not whole code to avoid to getting robbed, if you want such a plugin like this, please contact to author








require_once(__DIR__ . '/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

add_action('plugins_loaded', 'init_custom_payment_gateway');

function init_custom_payment_gateway()
{


    class WC_Custom_Payment_Gateway extends WC_Payment_Gateway
    {

        public function __construct()
        {
            
        }

        public function init_form_fields()
        {
            
        }

        public function process_payment($order_id){}

        public function receipt_page($order)
        {
        }

        public function check_response(){}
    }

    function add_custom_payment_gateway($methods)
    {
    }

}
?>