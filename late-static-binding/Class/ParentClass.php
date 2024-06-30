<?php
class ParentClass
{
    public function p1()
    {
        echo __CLASS__ . PHP_EOL;
        echo get_class($this) . PHP_EOL;
    }
}
