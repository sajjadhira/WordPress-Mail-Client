<?php
trait Pages
{

    public function __construct()
    {
    }
    public function emailclient_inbox()
    {
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
