<?php

// current filename is and file extension 

$dirname = 'class';
$dirPath = plugin_dir_path(__FILE__) . $dirname;
// include Activator trait
require_once $dirPath . '/Activator.php';
require_once $dirPath . '/Deactivator.php';
require_once $dirPath . '/Menu.php';

trait Load
{
    use Activator;
    use Deactivator;
    use Menu;


    public function init($file)
    {
        // register activation hook
        $this->activate($file);

        // register deactivation hook
        $this->deactivate($file);

        // register menu
        $this->menu($file);
    }
}
