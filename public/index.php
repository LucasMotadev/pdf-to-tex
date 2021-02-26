<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


function path(string $relativePath){
    return str_replace("public","", __DIR__ ) . "/$relativePath";
}


 
require "../vendor/autoload.php";

require "../app/tests/index.php";
