<?php

namespace  HotzApp\Api;

class Items{
    
    private $product_name;
    private $quantity;
    private $price;

    public function __construct() 
    {
    }

    public function setProductName($name)
    {
        $this->product_name=$name;
    }

    public function getProductName()
    {
        return $this->product_name;   
    }

    public function setQuantity($quantity)
    {
        $this->quantity=$quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setPrice($price)
    {
        $this->price=$price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function run()
    {
        return get_object_vars($this);
    }
}