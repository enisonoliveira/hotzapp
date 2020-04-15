<?php

namespace  HotzApp\Api;

class Trasaction{

    private $payment_method;
    private $financial_status;
    protected $created_at;
    protected $transaction_id;
    protected $paid_at;

    public function __construct() 
    {
    }

    public function setPaidAt($paid_at)
    {
        $this->paid_at=$paid_at;
    }

    public function getPaidAt()
    {
        return $this->paid_at;
    }

    public function setFinancialStatus($financialStatus)
    {
        $this->financial_status=$financialStatus;
    }

    public function getFinancialStatus()
    {
        return  $this->financial_status;
    }
    
    public function setPaymentMethod($method)
    {
        $this->payment_method=$method;
    }

    public function getPaymentMethod()
    {
        return $method;
    }

    public function getTransactionId() 
    {
        return $this->transaction_id;
    }
    
    public function setTransactionId($id)
    {
        $this->transaction_id=$id;;
    }

    public function setCreatedAt($createdAt)
    {
        $this->created_at=$createdAt;
    }

    public function getCreatAt()
    {
        return $this->created_at;
    }

    public function run()
    {
        return get_object_vars($this);
    }

}