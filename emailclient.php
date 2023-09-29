<?php
/*
Plugin Name: Email Client
Plugin URI: https://pluginoo.com
Description: A simple mail connection plugin
Version: 1.0
Author: Pluginoo
Author URI: https://pluginoo.com
License: GPLv2 or later
Text Domain: emailclient
*/

defined('WPINC') || die;

define('PEMC_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('PEMC_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once plugin_dir_path(__FILE__) . 'Load.php';

class EmailClient
{
    use Load;
}

$client = new EmailClient;
$client->init(__FILE__);
