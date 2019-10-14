<?php
$fruit = new Fruit2("Strawberry", "red");
$fruit->message();

class Fruit2
{
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected  function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
    public function message(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}