<?php
// regular
include "classes/simpleclass.class.php";
$obj=new simpleclass();
echo $obj->helloworld();
echo "<br/>";
// anonymous
$newobj=new class(){
    public function helloworld(){
        echo "hellow world";
    }
};
$newobj->helloworld();
?>