<?php

namespace views;

class View
{
    const DEFAULT_HEADER = 'header.php';
    const DEFAULT_FOOTER = 'footer.php';

    public function render($body, $header = null, $footer = null)
    {
        // HEADER
        if ($header == null) {
            include_once('views/templates/' . self::DEFAULT_HEADER);
        }

        // BODY
        include_once('views/templates/' . $body . 'Template.php');

        // FOOTER        
        if ($footer == null) {
            include_once('views/templates/' . self::DEFAULT_FOOTER);
        }
    }
}
