<?php
// import base

require_once PEMC_PLUGIN_DIR . 'class/Connection.php';

// import Base

require_once PEMC_PLUGIN_DIR . 'class/Base.php';



trait Inbox
{
    use Base;

    public function emails()
    {
        // get details from option table
        $email = get_option($this->pluginPrefix . 'email');
        $password = get_option($this->pluginPrefix . 'password');
        $imap_host = get_option($this->pluginPrefix . 'imap_host');
        $imap_port = get_option($this->pluginPrefix . 'imap_port');

        $name = get_option($this->pluginPrefix . 'name');

        // explode host
        $explode_imap_host = explode('://', $imap_host);
        $the_imap_host = $explode_imap_host[1];
        $encryption = $explode_imap_host[0];

        $data['host'] = $the_imap_host;
        $data['email'] = $email;
        $data['password'] = $password;
        $data['port'] = $imap_port;
        $data['encription'] = $encryption;

        $connection = new Connection();
        $inbox = $connection->connect($data);
        $emails = imap_search($inbox, 'ALL');
        return $emails;
    }
}
