<?php
require "includes/inheritance.inc.php";
$pet1=new pet();
echo $pet1->owner();
// ----------------------------------
$pet1 =new persons();
echo "<br/>fname:".$pet1->owner();
// ----------------------------------------------------------->
$pet1 =new persons();
echo "<br/>lname:".  $pet1->lname;
?>