<?php
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$apple->set_color('RED');
$banana->set_color('YELLOW');

echo $apple->get_name();
echo $apple->get_color();
echo "<br>";
echo $banana->get_name();
echo $banana->get_color();
var_dump($apple instanceof Fruit);
class Fruit
{
    public $name;
    public $color;
    protected $tasty;
    private $weight;

    function __construct() { #$name,$color
        /*
         *   $this->name = $name;
         *  $this->color = $color;
         */
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
    function set_name($name) {
        $this->name = $name;

    }
    function get_name() {
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
    function set_color($color) {
        $this->color = $color;

    }

}