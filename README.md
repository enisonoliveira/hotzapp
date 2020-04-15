# hotzapp

pacote php laravel 5.7
php desejável >= 7.2

configurando no laravel o pacote
 primeiro registrar o serviceprovider no arquivo config/app.php 
 em providers adiciona a seguinte linha
 
  HotzApp\HotzAppServiceProvider::class,
  
  no mesmo arquivo app.php em  'aliases' => 
  registre o facede
  
  'HotzApp'    => HotzApp\Facades\HotzApp::class,
  
  para ser reconhecido e instalado pelo composer adicione no arquivo 
  composer.json na raiz do projeto a seguinte linha 
  em autoload, psr-4 "HotzApp\\": "hotzapp/"
   ficando dessa forma 
   
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "HotzApp\\": "hotzapp/"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ]
    },
    
   ==========================================================================
   enviando boleto emitido

   
   
  
 <?php

namespace App\Jobs;

use HotzApp\Api\Customer;
use HotzApp\Api\Items;
use HotzApp\Api\Billet;
use  HotzApp\Api\HotzAppApi as hot;
use HotzApp\Api\Address;
use HotzApp\Api\Trasaction;

class PaymentBillentHotzApp implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private  $transaction;
    private  $payment;
    private  $customer;
    private  $order;
    private  $idcustomer;
    private  $customerDb;
    private  $paymentDB;
    private  $request;
    
    public function __construct($array)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $this->request = new Request();
        $this->array=$array;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->idcustomer="1";
        $this->hotzapp= new  hot;
        $this->hotzapp->address(self::address());
        $this->hotzapp->transaction(self::transaction());
        $this->hotzapp->items(self::items());
        $this->hotzapp->customer(self::customer());
        $this->hotzapp->billet(self::billet());
        $this->hotzapp->send("url de configuração da loja fornecido pelo hotzapp");
    }

    public function customer()
    {
        $this->customer= new Customer; 
        $this->customerDb= self::getCustomer();
        $this->customer->setName("Enison Oliveira");
        $this->customer ->setPhone("47999665396");
        $this->customer  ->setEmail("enisonoliveira@hotmail.com");
        return  $this->customer;
    }

    public function address()
    {
        $this->address= new Address;
        $this->address->setAdress("Rua test");
        $this->address->setAddressNumber("300");
        $this->address->setAddressComplement("Apartamento 23");
        $this->address->setAddressDistrict("JARDIM ATLANTICO");
        $this->address->setAddressZipCode("08742350");
        $this->address->setAddressCity("São Paulo");
        $this->address->setAddressState("SP");
        $this->address->setAddressCountry("BRASIL");
        return  $this->address;
    }


    public function getCustomer(){

        return ct::find($this->idcustomer);
    }

    public  function iso8601() 
    {
        $time=time();
        return date("Y-m-d", $time) . 'T' . date("H:i:s", $time) .'-03:00';
    }

    public function transaction()
    {
        $this->transaction= new Trasaction;
        $this->customerDb= self::getCustomer();
        $this->transaction->setFinancialStatus('issued');
        $this->transaction->setTransactionId( $this->customerDb->id);
        $this->transaction->setCreatedAt(self::iso8601());
        $this->transaction->setPaymentMethod('billet');
        return  $this->transaction;
    }

    public function items()
    {
        $this->items= new Items;
        $this->items->setProductName("iphone");
        $this->items->setPrice("7000");
        $this->items->setQuantity('1');
        return   $this->items;
    }

    public function billet()
    {
        $this->billet= new Billet;
        $this->customerDb= self::getCustomer();
        $this->billet->setDoc($this->customerDb->cpf);
        $this->billet->setCurrencyCodeFrom('R$');
        $this->billet->setTotalPrice("7000");
        $this->billet->setBilletUrl("");
        $this->billet->setBilletBarcode("");
        return $this->billet;
    }
}
