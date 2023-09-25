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
        wp_enqueue_style($this->pluginSlug, plugin_dir_url($file) . 'assets/css/' . $this->pluginSlug . '.css', [], $this->pluginVersion, 'all');
    }

    public function enqueJS($file)
    {
        wp_enqueue_script($this->pluginSlug, plugin_dir_url($file) . 'assets/js/' . $this->pluginSlug . '.js', [], $this->pluginVersion, true);
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
}
