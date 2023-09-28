<?php

// include Base
require_once 'Base.php';


trait Styles
{
    use Base;
    public function css()
    {
        // enqueue css
        $this->enqueCSS('tailwind.css');
    }
}
