## Practice all oop concept

#### If autoload is not used, first include the class that is extended <b>OR</b> Include where class is extend
#### If child class use super class method(get_class($this) get child class name)
#### __CLASS__ All time return class where is defined

```php
    class ParentClass
    {
        public function p1()
        {
            echo __CLASS__ . PHP_EOL;
            echo get_class($this) . PHP_EOL;
        }
    }

    class ChildClass extends ParentClass
    {
        public function c1()
        {
            echo __CLASS__ . PHP_EOL;
        }
    }
    $c1 = new ChildClass;
    $c1->p1(); // get ParentClass ChildClass
```

### All list(complete, incomplete)
1. - [x] Late static binding
    1. Use child class method in super class

2. - [] Namespace
3. - [] Task1
4. - [] Task1
5. - [] Task1
6. - [] Task1
7. - [] Task1  



---

- Late static binding
    1. [Training][training]
    2. [GIO][gio]












[training]: https://www.youtube.com/watch?v=ojd4J8P8T6g&t=228s
[gio]: https://www.youtube.com/watch?v=4W5t8g3Rp_0&t=121s
