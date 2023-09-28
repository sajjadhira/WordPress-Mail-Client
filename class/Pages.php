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
        echo "Inbox";
    }

    public function emailclient_sent()
    {
        echo "Sent";
    }

    public function emailclient_draft()
    {
        echo "Draft";
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
