<?php
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();

class Strawberry extends Fruit2
{
    public function message() {
        echo "Am I a fruit or a berry? ";
        // Call protected method from within derived class - OK
        $this -> intro();
    }
}