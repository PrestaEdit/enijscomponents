<?php
declare(strict_types=1);

if (!defined('_PS_VERSION_')) {
    exit;
}

class EniJsComponents extends Module
{
    public function __construct()
    {
        $this->name = 'enijscomponents';
        $this->bootstrap = true;

        parent::__construct();
    }

    public function getContent()
    {
    }
}