<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

if (isset($_GET['url'])) {
    $rota = explode('/', rtrim($_GET['url'], '/'));
    var_dump($rota);
}