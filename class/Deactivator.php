<?php
// include Base and Database traits

require_once 'Base.php';
require_once 'Database.php';


trait Deactivator
{
    use Base;
    use Database;

    public function deactivate($file)
    {
        // register deactivation hook
        register_deactivation_hook($file, [$this, 'deleteTables']);
    }

    public function deleteTables()
    {

        global $wpdb;

        // call $tables from Database trait
        $tables = $this->tables;

        foreach ($tables as $key => $value) {
            $table_name = $wpdb->prefix . $this->pluginPrefix . $key;
            $sql = "DROP TABLE IF EXISTS $table_name";
            $wpdb->query($sql);
        }
        // do something
    }
}
