<?php

use App\Core\Application;

$app = new Application();

$app->addRouter('get', '/', function() {return 'Home';});


    //запит складається з методу запиту, сокету у вигляду порта, айди, домен, хост, хеадерів, тіло запиту
    //HTTP Request -> Application -> HTTP Responce