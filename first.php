<?php 
// echo "Hello";die;
class calculation{
    public $a,$b,$c,$d,$total;

    function sum(){
        $this->c = $this->a + $this->b;
        $this->total = $this->c - $this->a;
        return $this->total;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();
$c1->a = 10;
$c1->b = 20;

$c2 = new calculation();
$c2->a = 50;
$c2->b = 35;

echo "Sum Value of C1 :" . $c1->sum()."</br>";
echo "Subtraction Value of C1 :" . $c2->sub()."</br>";
echo "Sum Value of C2 :" . $c2->sum()."</br>";
$new = new calculation();
$new->a = 50;
$new->b = 100;

echo "New Value Test For NEW:: ".$new->sum();

?>