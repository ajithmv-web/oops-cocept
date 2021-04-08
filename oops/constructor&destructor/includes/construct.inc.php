<?php
class person{

public $name;
public $age;
public function __construct($name,$age){
    $this->name=$name;
    $this->age=$age;
}

public function __destruct(){
   echo "my name is : ". $this->name;
   echo "<br>";
   echo "my age is  : ". $this->age;
}

}
?>
