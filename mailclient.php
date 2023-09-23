<?php
/*
Plugin Name: Mail Client
Plugin URI: https://pluginoo.com
Description: A simple mail connection plugin
Version: 1.0
Author: Pluginoo
Author URI: https://pluginoo.com
License: GPLv2 or later
Text Domain: mailclient
*/
require_once plugin_dir_path(__FILE__) . 'Load.php';

class MailClient
{
    use Load;
}

$client = new MailClient;
$client->init(__FILE__);
