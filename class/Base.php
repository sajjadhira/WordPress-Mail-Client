<?php
trait Base
{
    public $pluginName = 'Email Client';
    public $pluginSlug = 'emailclient';
    public $pluginVersion = '1.0';
    public $pluginTextDomain = 'emailclient';
    public $pluginPrefix = 'emailclient_';
    public $pluginCardColPrefix = 'emailclient__card_col_';
    public $pluginOptionGroup = 'emailclient_options';
    public $pluginOptionName = 'emailclient_option';
    public $pluginStart = '<div class="wrap">';
    public $pluginDivCenter = '<div class="text-center">';
    public $pluginEnd = '</div>';
    public $divEnd = '</div>';


    public function enqueCSS($file)
    {
        wp_enqueue_style($this->pluginSlug, PMC_PLUGIN_URL . 'assets/css/' . $file . '.css', [], $this->pluginVersion, 'all');
    }

    public function enqueJS($file)
    {
        wp_enqueue_script($this->pluginSlug, PMC_PLUGIN_URL . 'assets/js/' . $file . '.js', [], $this->pluginVersion, true);
    }

    public function divStart($class = '')
    {
        if ($class == '') {
            return '<div>';
        }
        return '<div class="' . $class . '">';
    }

    public function h1($text)
    {
        return '<h1>' . $text . '</h1>';
    }

    public function Card($title, $content, $class = '')
    {
        return '
        <div class="' . $this->pluginPrefix . '_card ' . $class . '">
            <div class="' . $this->pluginPrefix . '_card__title">' . $title . '</div>
            <div class="' . $this->pluginPrefix . '_card__content">' . $content . '</div>
        </div>
        ';
    }

    public function p($text, $class = '')
    {
        if ($class == '') {
            return '<p>' . $text . '</p>';
        }
        return '<p class="' . $class . '">' . $text . '</p>';
    }

    public function getEmail()
    {
        // get current user id
        $user_id = get_current_user_id();
        // get data from database for $this->pluginPrefix . 'cleints' table
        global $wpdb;
        $table_name = $wpdb->prefix . $this->pluginPrefix . 'clients';
        $email = $wpdb->get_var("SELECT email FROM $table_name WHERE user_id = $user_id");
        // if data is found return id and email
        if ($email) {
            return $email;
        }
    }
}
