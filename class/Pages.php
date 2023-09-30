<?php
// import Styles
require_once 'Base.php';


trait Pages
{

    use Base;

    // public function __construct()
    // {
    //     $this->css();
    // }
    public function emailclient_inbox()
    {
        $this->enqueCSS('tailwind');
        require_once PEMC_PLUGIN_DIR . 'views/inbox.php';
    }

    public function emailclient_sent()
    {
        $this->enqueCSS('tailwind');
        require_once PEMC_PLUGIN_DIR . 'views/sent.php';
    }

    public function emailclient_draft()
    {
        $this->enqueCSS('tailwind');
        require_once PEMC_PLUGIN_DIR . 'views/draft.php';
    }


    public function emailclient_trash()
    {
        echo "Trash";
    }

    public function emailclient_spam()
    {
        echo "Spam";
    }

    public function emailclient_settings()
    {
        echo "Settings";
    }
}
