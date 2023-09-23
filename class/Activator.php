<?php
// include Base and Database traits
require_once 'Base.php';
require_once 'Database.php';

trait Activator
{
    use Base;
    use Database;
    public function activate($file)
    {
        // register activation hook
        register_activation_hook($file, [$this, 'insertTables']);
    }
    public function insertTables()
    {

        global $wpdb;;

        // call $tables from Database trait
        $tables = $this->tables;

        foreach ($tables as $key => $value) {
            $table_name = $wpdb->prefix . $this->pluginPrefix . $key;
            $charset_collate = $wpdb->get_charset_collate();
            $sql = "CREATE TABLE `$table_name` (";
            foreach ($value as $k => $v) {
                // check if key is primary key
                if ($k == 'PRIMARY KEY') {
                    $sql .= '
                    ' . $k . ' ' . $v . ' 
                    ';
                    continue;
                }
                $sql .= '
                `' . $k . '` ' . $v . ', ';
            }
            $sql .= ") $charset_collate;";
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

            dbDelta($sql);
            // if table is not created then show error
            if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
                wp_die("Error creating table: $table_name , $wpdb->last_error ");
            }
        }
    }
}
