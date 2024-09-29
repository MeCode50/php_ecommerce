<?php

if (!defined("DS")) {
    define("DS", DIRECTORY_SEPARATOR);
}



// Check if the TEMPLATE_FRONT constant is not defined, and if so, define it to point to the "templates/back" directory.
if (!defined("TEMPLATE_FRONT")) {
    define("TEMPLATE_FRONT", __DIR__.DS. "templates/back");
}


echo TEMPLATE_FRONT;


?>