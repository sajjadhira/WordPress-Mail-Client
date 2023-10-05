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

        $message = null;

        // get details from option table
        $email = get_option($this->pluginPrefix . 'email');
        $password = get_option($this->pluginPrefix . 'password');
        $host = get_option($this->pluginPrefix . 'host');
        $port = get_option($this->pluginPrefix . 'port');
        $encryption = get_option($this->pluginPrefix . 'encryption');
        $name = get_option($this->pluginPrefix . 'name');

        if (isset($_POST['submit_settings'])) {
            $nonce = $_POST['submit_settings_nonce'];

            if (!wp_verify_nonce($nonce, 'submit_settings')) {
                $message = $this->divStart('bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3') . $this->p('Please fill all the fields.') . $this->divEnd;
            }

            // check others input fields
            if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['host']) || empty($_POST['port']) || empty($_POST['encryption']) || empty($_POST['name'])) {
                $message = $this->divStart('bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3') . $this->p('Please fill all the fields.') . $this->divEnd;
            }

            if (is_null($message)) {
                // now store q to option table with $this->pluginPrefix

                $email = sanitize_email($_POST['email']);
                $password = sanitize_text_field($_POST['password']);
                $host = sanitize_text_field($_POST['host']);
                $port = sanitize_text_field($_POST['port']);
                $encryption = sanitize_text_field($_POST['encryption']);
                $name = sanitize_text_field($_POST['name']);

                // update settings
                update_option($this->pluginPrefix . 'email', $email);
                update_option($this->pluginPrefix . 'password', $password);
                update_option($this->pluginPrefix . 'host', $host);
                update_option($this->pluginPrefix . 'port', $port);
                update_option($this->pluginPrefix . 'encryption', $encryption);
                update_option($this->pluginPrefix . 'name', $name);

                $message = $this->divStart('bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-3') . $this->p('Settings saved successfully.') . $this->divEnd;
            }
        }
        $this->enqueCSS('tailwind');
        require_once PEMC_PLUGIN_DIR . 'views/settings.php';
    }
}
