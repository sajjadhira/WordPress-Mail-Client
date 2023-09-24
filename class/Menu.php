<?php

// include Base
require_once 'Base.php';

trait Menu
{
    use Base;
    public $file;
    public function menu($file)
    {
        $this->file = $file;
        add_action('admin_menu', [$this, 'addMenu']);
    }
    public function addMenu()
    {
        add_menu_page(
            $this->pluginName,
            $this->pluginName,
            'manage_options',
            $this->pluginSlug,
            [$this, 'menuCallback'],
            'dashicons-email-alt'
        );
    }
    public function menuCallback()
    {
        // enqueue css
        $this->enqueCSS($this->file);
        // enqueue js
        $this->enqueJS($this->file);

        echo $this->pluginStart;
        echo $this->h1($this->pluginName);
        echo $this->divStart($this->pluginSlug);
        //

        echo $this->divStart($this->pluginPrefix . '_content');

        echo $this->Card('Inbox', 10, $this->pluginCardColPrefix . '3 ' . $this->pluginPrefix . '_bg_green');
        echo $this->Card('Sent', 30, $this->pluginCardColPrefix . '3 ' . $this->pluginPrefix . '_bg_blue');

        echo $this->divEnd;


        //
        echo $this->divEnd;
        echo $this->divEnd;
    }
}
