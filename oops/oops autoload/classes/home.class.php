<?php

 
class home{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function getname() {
    $person1= " Name is  " . $this->name . " He is  ". $this->age ."  years old.";
    return $person1;
    }
}

?>