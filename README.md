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

 
