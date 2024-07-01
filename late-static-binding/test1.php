<?php
// require_once "Class/ParentClass.php";
// require_once "Class/ChildClass.php";

spl_autoload_register(function ($class_name) {
    include_once __DIR__ . "/Class/" . $class_name . ".php";
});


// $c1 = new ChildClass;
// $c1->c1();
// $c1->p1();

$p1 = new ParentClass;
$p1->p1();
// $p1->c1(); // Get error
