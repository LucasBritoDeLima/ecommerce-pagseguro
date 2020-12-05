<?php

use \Hcode\Page;
use \Hcode\Model\User;
use \GuzzleHttp\Client;
use \Hcode\PagSeguro\Config;

$app->get('/payment/pagseguro', function() {

    $client = new Client();
    $res = $client->request('POST', Config::getUrlSessions() . "?" . http_build_query(Config::getAuthentication()), [
        'verify'=>false
        //Concluído
    ]);

    echo $res->getBody()->getContents();

});

