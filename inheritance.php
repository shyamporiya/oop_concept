<?php
class employee{
    public $name;
    public $age;
    public $salary;
    
    
    function __construct($n,$a,$s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    
    }

    function info()
    {
        echo "<h3>Employee Profile</h3></br>";
        echo "Employee Name is :".$this->name."</br>";
        echo "Employee Age is :".$this->age."</br>";
        echo "Employee Salery is :".$this->salary."</br>";
    }
}
 

class manager extends employee{
    public $ta = 1000;
    public $phone = 300;
    public $totalsalary;
    
    function info(){
        $this->totalsalary = $this->salary + $this->ta + $this->phone;
    
        echo "<h3>Manager Profile</h3></br>";
        echo "Employee Name is :".$this->name."</br>";
        echo "Employee Age is :".$this->age."</br>";
        echo "Employee Salery is :".$this->totalsalary."</br>";
    }

}
$e1 = new manager("Ram",22,10000);
$e2 = new employee("Krishna",27,2000);

$e1->info();
$e2->info();
?>
