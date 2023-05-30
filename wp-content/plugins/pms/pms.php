<?php

/**
 * @package pms
 */

/*
Plugin Name: pms
Plugin URI: http://...
Description: A ticket management system for project managers and employees
Version: 1.0.0
Author: Hope ,Nicholas,Patrick
Author URI: http://...
License: GPLv2 or Later
Text Domain: pms plugin
*/

//Security Check 

defined('ABSPATH') or die("Caught you hacker");

//Require once the Composer Autoload
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base;
function activate_pms_plugin(){
    Base\Activate::activate();
    // $create_table = new \Inc\Pages\CreateTable();
    // $create_table->register();
}
register_activation_hook(__FILE__, 'activate_pms_plugin');

function deactivate_pms_plugin(){
    Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_pms_plugin');

if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}


require_once plugin_dir_path(__FILE__) . 'custom-endpoints.php';


add_action( 'rest_api_init', 'pms_register_custom_endpoints' );

function pms_register_custom_endpoints(){

    $endpoints = new CustomEndpoints();
    $endpoints->pms_register_custom_endpoints();
}
