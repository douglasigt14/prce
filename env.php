<?php
class Env {
    protected  $url;

    public function __construct() {
        $this->url = 'localhost:8082';
    }

    public  function getUrl(){
        return $this->url;
    }

    public  function setUrl($value){
        $this->url = $value;
    }
}