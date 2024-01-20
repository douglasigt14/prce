<?php
class Env {
    protected  $url;

    public function __construct() {
        $this->url = 'prce.local.com';
    }

    public  function getUrl(){
        return $this->url;
    }

    public  function setUrl($value){
        $this->url = $value;
    }
}