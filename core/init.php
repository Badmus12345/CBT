<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'cbt');

function __autoload($class_name){
    require_once('../libraries/'.$class_name.'.php');
}

$renderer = new Render;
