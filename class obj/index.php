<?php


include "includes/classobj.inc.php";


$object=new NewClass();

var_dump($object);

echo"<br/>";
$obj=new NewClasss();
$obj->set_name('Orange');
echo $obj->get_name();

echo"<br/>";


$obj=new person();
$obj->setname('ajith');
echo $obj->name;


?>