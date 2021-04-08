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
    $person= "my name is ".$this->name."  is  ".$this->age."  years old.";
    return $person;
    }
}
?>