<?php

namespace  HotzApp\Api;

class Billet{

    private $doc;
    private $currency_code_from;
    private $total_price;
    private $billet_url;
    private $billet_barcode;

    public function __construct() 
    {
    }

    public function setDoc($doc)
    {
        $this->doc=$doc;
    }

    public function getDoc()
    {
        return $this->doc;
    }

    public function setCurrencyCodeFrom($currency)
    {
        $this->currency_code_from=$currency;
    }

    public function getCurrencyCodeFrom()
    {
        return  $this->currency_code_from;
    }

    public function setTotalPrice($total)
    {
        $this->total_price=$total;
    }

    public function getTotalPrice()
    {
        return $this->total_price;
    }

    public function setBilletUrl($billetUrl)
    {
        $this->billet_url=$billetUrl;
    }

    public function getBilletUrl()
    {
        return $this->billet_url;
    }

    public function setBilletBarcode($billetBarcode)
    {
        $this->billet_barcode=$billetBarcode;
    }

    public function getBilletBarCode()
    {
        return $this->billet_barcode;
    }

    public function run()
    {
        return get_object_vars($this);
    }
}