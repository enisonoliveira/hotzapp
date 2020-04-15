<?php 

namespace  HotzApp\Api;

class Customer 
{

    protected $phone;
    protected $name;
    protected $email;

    public function __construct() 
    {
    }

    public function getName() 
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setPhone($phone)
    {
        $this->phone=$phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function run()
    {
        return get_object_vars($this);
    }
   
}
