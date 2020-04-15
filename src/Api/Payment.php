<?php

namespace  HotzApp\Api;

use  HotzApp\Api\Request;
use HotzApp\Api\Enverionment;

class Payment{

    private $array= array();
    private $url_path;

    public function __construct() 
    {
        $this->url_path="";
    }

    public function setAddress( $address)
    {
        $this->array=array_merge($this->array,$address);
    }

    public function setCustomer($customer)
    {
        $this->array=array_merge($this->array,$customer);  
    }

    public function setTransaction($transaction)
    {
        $this->array=array_merge($this->array,$transaction);  
    }

    public function setBillet($billet)
    {
        $this->array=array_merge($this->array,$billet);  
    }

    public function setItems($items)
        {
        $this->array["line_items"]=$items;  
    }

    public function run($url){
        $credential=new Enverionment;
        $this->url_path=$url;
        $credential->setEnv("prod");
        $credential->setUrlProduction($url);
        $request= new Request($credential);
        $json=json_encode($this->array);
        $request-> post($this->url_path, $json);
    }

}