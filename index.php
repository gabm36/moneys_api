<?php

require_once 'vendor/autoload.php';

if (isset($_GET['url'])) {
    $rota = explode('/', rtrim($_GET['url'], '/'));
    var_dump($rota);
}