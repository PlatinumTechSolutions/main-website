<?php

class Template
{
    public  $pageTitle   = 'Platinum Tech Solutions';
    private $sectionPath = null;

    public function __construct()
    {
        $this->sectionPath = dirname(__FILE__) . '/sections/';
    }

    public function display($filename)
    {
        // make the template class visible to the section
        $t = $this;

        // require the section content
        require($this->sectionPath . $filename);
    }
}

$t = new Template();

