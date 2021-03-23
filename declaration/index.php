<?php
declare(strict_types=1);
include 'includes/decla.inc.php';
?>


<?php
$obj=new person( );


try{
$obj->setname("appu");
echo $obj->getname();
}catch ( TypeError $e){
    echo"Error!:".$e->getmessage();
}
?>