<?php

include 'tema6_nivell2_enum_themes.php';
include 'tema6_nivell2_enum_resources.php';

class Php_Info{

    //PROPERTIES
    private $name;
    private $theme;
    private $url;
    private $resource;

    //CONSTRUCTOR
    public function __construct($name, $theme, $resource, $url){
        $this->name = $name;
        $this->url = $url;
        $this->theme = $theme;
        $this->resource = $resource;
    }


    //METHODS

    public function getThemes(){
        return $this->theme;
    }

    public function getResources(){
        return $this->resource;
    }
}