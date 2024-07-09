<?php

use Themes;
use Resources;

class Php_Info{

    //PROPERTIES
    private $name;
    private $theme;
    private $url;
    private $resource;

    //CONSTRUCTOR
    public function __construct($name, $url){
        $this->name = $name;
        $this->url = $url;
    }


    //METHODS

    public function getThemes(Themes $theme){
        $this->theme = $theme;
    }

    public function getResources(Resources $resource){
        $this->resource = $resource;
    }
}