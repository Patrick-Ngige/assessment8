<?php

/**
 * @package tickets
 */

/*
Plugin Name: Tickets
Plugin URI: http://...
Description: A ticket management system for project managers and employees
Version: 1.0.0
Author: Hope ,Nicholas,Patrick
Author URI: http://...
License: GPLv2 or Later
Text Domain: Tickets plugin
*/

//Security Check 

defined('ABSPATH') or die("Caught you hacker");

//Require once the Composer Autoload
if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base;
function activate_tickets_plugin(){
    Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_tickets_plugin');

function deactivate_tickets_plugin(){
    Base\Deactivate::deactivate();
}
<<<<<<< Updated upstream:wp-content/plugins/tickets/tickets.php
register_deactivation_hook(__FILE__, 'deactivate_tickets_plugin');
=======
register_deactivation_hook(__FILE__, 'deactivate_pms_plugin');

if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}
>>>>>>> Stashed changes:wp-content/plugins/pms/pms.php
