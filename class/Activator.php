<?php
require_once plugin_dir_path(__FILE__) . 'Database.php';

trait Activator
{
    use Database;
    public function __construct()
    {
        // require Database trait
        register_activation_hook(__FILE__, [$this, 'activate']);
    }
    public static function activate()
    {

        global $wpdb;;

        // call $tables from Database trait
        $tables = $this->tables;

        foreach ($tables as $key => $value) {
            $table_name = $wpdb->prefix . $key;
            $charset_collate = $wpdb->get_charset_collate();
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (";
            foreach ($value as $k => $v) {
                $sql .= $k . ' ' . $v . ', ';
            }
            $sql .= ") $charset_collate;";
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }
    }
}
