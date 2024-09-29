<?php

// turn on output buffering
ob_start();

// turned on session 
 session_start();

if (!defined("DS")) {
    define("DS", DIRECTORY_SEPARATOR);
}

// Check if the TEMPLATE_FRONT constant is not defined, and if so, define it to point to the "templates/back" directory.
if (!defined("TEMPLATE_FRONT")) {
    define("TEMPLATE_FRONT", __DIR__.DS. "templates/front");
}

if (!defined("TEMPLATE_BACK")) {
    define("TEMPLATE_BACK", __DIR__.DS. "templates/back");
}

if (!defined("DB_HOST")) {
    define("DB_HOST",  "localhost");
}

if (!defined("DB_USER")) {
    define("DB_USER",  "root");
}

if (!defined("DB_PASS")) {
    define("DB_PASS",  "");
}

if (!defined("DB_NAME")) {
    define("DB_NAME",  "ecommerce");
}

$connection =  mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

require_once ("functions.php");

?>