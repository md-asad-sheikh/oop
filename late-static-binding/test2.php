
<?php
class ParentClass
{
    public function callChildMethod()
    {
        $childClass = get_class($this);
        $child = new $childClass;
        $child->childMethod();
    }
}

class ChildClass extends ParentClass
{
    public function childMethod()
    {
        echo __CLASS__ . PHP_EOL;
        echo get_class($this) . PHP_EOL;
    }
}


// $p1 = new ChildClass;
// $p1->callChildMethod();

const Name = "abcd";
echo Name;

define("nm", "aaaaaaaaaaa");
echo nm;