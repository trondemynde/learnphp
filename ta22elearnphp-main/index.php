<?php

class Box {
    public $var;
    public $foo;
    public $bar;
    public function __construct($var, $foo, $bar){
        var_dump($var, $foo, $bar);
        $this->var = $var;
        $this->foo = $foo;
        $this->bar = $bar;
    }
    public function __set($name, $value)
    {
        var_dump($name, $value);
    }
    public function __destruct(){
        echo 'object was destroyed';
    }
}

$box = new Box('hello', 1, 2);

var_dump(serialize($box));
