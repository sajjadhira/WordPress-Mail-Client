<?php

// include Base
require_once 'Base.php';
require_once 'Pages.php';

trait Menu
{
    use Base;
    use Pages;
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

        // add submenus
        $submenus = [
            'inbox' => 'Inbox',
            'sent' => 'Sent',
            'draft' => 'Draft',
            'trash' => 'Trash',
            'spam' => 'Spam',
            'settings' => 'Settings',
        ];
        foreach ($submenus as $key => $value) {
            add_submenu_page(
                $this->pluginSlug,
                $value,
                $value,
                'manage_options',
                $this->pluginSlug . '_' . $key,
                [$this, $this->pluginSlug . '_' . $key]
            );
        }
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

        echo $this->pluginDivCenter;
        echo $this->p("You are loogged is as " . $this->getEmail(), $this->pluginPrefix . '_content__user');
        echo $this->divEnd;
        echo $this->divEnd;


        //
        echo $this->divEnd;
        echo $this->divEnd;
    }
}
