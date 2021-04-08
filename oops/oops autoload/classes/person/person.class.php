<?php

  namespace person;
class person{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function getperson() {
    $person1= " Name is ".$this->name." He is  ".$this->age."  years old.";
    return $person1;
    }
}

?>