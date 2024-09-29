<?php

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
echo TEMPLATE_FRONT;


?>