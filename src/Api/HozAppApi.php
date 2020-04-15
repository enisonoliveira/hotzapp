<?php 

namespace  HotzApp\Api;

use   HotzApp\Api\Customer;
use   HotzApp\Api\Payment;
use   HotzApp\Api\Items;
use   HotzApp\Api\Billet;
use   HotzApp\Api\Address;
use   HotzApp\Api\Trasaction;

class HotzAppApi extends Payment
{
	private $array;
    private $url_path;

    public function __construct() 
    {
    }

    public function address( Address $address)
    {
        self::setAddress($address->run());
    }

    public function customer( Customer $customer)
    {
        self::setCustomer($customer->run());
    }

     public function billet(Billet $billet)
    {
        self::setBillet($billet->run());
    }

    public function transaction(Trasaction $transaction)
    {
        self::setTransaction($transaction->run());
    }

    public function items(Items $items)
    {
        self::setItems($items->run());
    }

    public function send($url)
    {
        self::run($url);
    }
}