<?php
class Car
{
    public $name;
    public $color;

    function set_name($name)
    {
        $this->name = $name;
    }

      function get_name()
    {
        return $this->name;
    }
}

$bmw = new Car();
$mastang = new Car();
$ashish = new Car();
$bmw->set_name('M3 Sport');
$mastang->set_name('Mastang');
$ashish->set_name('ashish bro niche chalo');

echo $bmw->get_name();
echo "<br>";
echo $mastang->get_name();
echo "<br>";
echo $ashish->get_name();




class ArrayObjectExample
{
    private $data;

    // Constructor to initialize the array
    public function __construct()
    {
        $this->data = array();
    }

    // Method to add an element to the array
    public function addElement($element)
    {
        $this->data[] = $element;
    }

    // Method to get the array
    public function getArray()
    {
        return $this->data;
    }
}

// Create an instance of the ArrayObjectExample class
$arrayObject = new ArrayObjectExample();

// Add elements to the array
$arrayObject->addElement("Element 1");
$arrayObject->addElement("Element 2");
$arrayObject->addElement("Element 3");

// Get the array
$array = $arrayObject->getArray();

// Print the array
print_r($array);
