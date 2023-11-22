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
$bmw->set_name('M3 Sport');
$mastang->set_name('Mastang');
$ashish->set_name('ashish bro niche chalo');

echo $bmw->get_name();
echo "<br>";
echo $mastang->get_name();
echo "<br>";
echo $ashish->get_name();
