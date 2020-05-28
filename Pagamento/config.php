<?php 

    //Config SANDBOX or PRODUCTION environment
    $SANDBOX_ENVIRONMENT = true;
    
    $PAGSEGURO_API_URL = 'https://ws.pagseguro.uol.com.br/v2';
    if($SANDBOX_ENVIRONMENT){
        $PAGSEGURO_API_URL = 'https://ws.sandbox.pagseguro.uol.com.br/v2';
    }

    $PAGSEGURO_EMAIL = 'ronaldooracle@gmail.com';
    $PAGSEGURO_TOKEN = '6C5E618927824B06BE2F8640FE5B5BF0';
?>