<?php
//INIT SESSION
session_start();

//SET CONSTANTS
define('BASE_URL', 'http://localhost/mini-framework-mvc/');
define('APP_NAME', 'Mini Framework MVC');
define('APP_VERSION', '1.0.0');
define('APP_AUTHOR', 'Wagner Ferreira');
define('APP_DESCRIPTION', 'Mini Framework MVC - PHP [Orientado a objeto]');

//SET TIMEZONE SAO PAULO
date_default_timezone_set('America/Sao_Paulo');

//FUNCTIONS
function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function assets($file) {
    return BASE_URL . 'public/' . $file;
}

function url($url) {
    return BASE_URL . $url;
}