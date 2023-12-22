<?php

class person{
    public $name = "Default Name";
    public $age = "18";

    function __construct($name = "Test", $age = 5)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show(){
            echo $this->name . " - " .$this->age . "</br>";
    }
}

$p1 = new person();
$p2 = new person("ram kumar",15);
$p3 = new person("salman khan",30);

// $p1->name = "Rahul";
// $p1->age = 20;

$p1->show();
$p2->show();
$p3->show();

?>