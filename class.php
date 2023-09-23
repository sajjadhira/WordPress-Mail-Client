<?php

// current filename is and file extension 

$filename = basename(__FILE__, '.php');
$extension = pathinfo(__FILE__, PATHINFO_EXTENSION);
require_once plugin_dir_path(__FILE__) . $filename . '.' . $extension;
