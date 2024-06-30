<?php
spl_autoload_register(function ($class_name) {
    include_once __DIR__ . "/Class/" . $class_name . ".php";
});

$c1 = new ChildClass;
$c1->p1();

$p1 = new ParentClass;
$p1->p1();
