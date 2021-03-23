<?php
include 'includes/class-autoload.inc.php';




    
$usersobj=new UsersView();
$usersobj->showUser("ajith"); 

$userscontr= new UsersContr();

$userscontr->createUser("anish","bro","1990-05-23");
        
        ?>

    