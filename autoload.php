<?php

// current filename is and file extension 

$dirname = 'class';
$dirPath = plugin_dir_path(__FILE__) . $dirname;
$files = scandir($dirPath);
foreach ($files as $file) {
    if (strpos($file, '.php') !== false) {
        require_once $dirPath . '/' . $file;
    }
}
