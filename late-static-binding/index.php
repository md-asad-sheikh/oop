<?php
spl_autoload_register(function ($class_name) {
    include_once __DIR__ . "/Class/" . $class_name . ".php";
});


// Php::framework();

PhpChild::framework();
