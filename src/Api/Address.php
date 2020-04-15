<?php

namespace  HotzApp\Api;

class Address
{
    private $address;
    private $address_number;
    private $address_complement;
    private $address_district;
    private $address_zip_code;
    private $address_city;
    private $address_state;
    private $address_country;

    public function __construct() 
    {
    }

    public function getAddress()
    {   
        return $this->address;
    }

    public function setAdress($address)
    {
        $this->address=$address;
    }

    public function getAdrressNumber($number){
        $this->address_number=$number;
    }

    public function setAddressNumber()
    {
        return $this->address_number;
    }

    public function setAddressComplement($complement)
    {
        $this->address_complement=$complement;
    }

    public function getAddressComplement()
    {
        return $this->address_complement;
    }
 
    public function setAddressDistrict($district)
    {
        $this->address_district=$district;
    }

    public function getAddressDistrict()
    {
        return $this->address_district;
    }

    public function setAddressZipCode($zipCode)
    {
        $this->address_zip_code=$zipCode;
    }

    public function getAddressZipCode()
    {
        return $this->address_zip_code;
    }

    public function setAddressCity($city)
    {
        $this->address_city=$city;
    }

    public function getAdrressCity()
    {
        return $this->address_city;
    }

    public function setAddressState($state)
    {
        $this->address_state=$state;
    }

    public function getAdressState()
    {
        return $this->address_state;
    }

    public function setAddressCountry($country)
    {
        $this->address_country=$country;
    }
    
    public function getAddressCountry()
    {
        return $this->address_country;
    }

    public function run()
    {
        return get_object_vars($this);
    }
}