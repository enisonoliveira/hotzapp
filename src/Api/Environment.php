<?php

namespace  HotzApp\Api;

class Enverionment{

    private static $production="PRODUCTION";
    private static $homol="SANDBOX";
    private  $urlProduction;
    private  $urlHomol;
    private  $enverionment="";

    public function __construct() 
    {
        $this->enverionment = env("hotzapp");
    }

    public function  getEnv(){
       
        if($this->enverionment="homol"){
            return self::$homol;
        }else{
            return self::$production;
        }
    }

    public function setEnv($env)
    {
        $this->enverionment=$env;
    }

    public function setUrlProduction($urlProduction)
    {
        $this->urlProduction=$urlProduction;
    }

    public function getProductionUrl()
    {
        return $this->urlProduction;
    }

    public function setSandBoxUrl($urlHomol)
    {
        $this->urlHomol=$urlHomol;
    }

    public function getSandboxUrl()
    {
         return $this->urlHomol;
    }

}