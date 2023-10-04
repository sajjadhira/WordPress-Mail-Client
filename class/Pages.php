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
        require_once PEMC_PLUGIN_DIR . 'views/trash.php';
    }

    public function emailclient_spam()
    {
        require_once PEMC_PLUGIN_DIR . 'views/spam.php';
    }

    public function emailclient_settings()
    {
        $this->enqueCSS('tailwind');
        require_once PEMC_PLUGIN_DIR . 'views/settings.php';
    }
}
