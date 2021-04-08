
<?php

include "connections.php";
 $stmt= $db->prepare("INSERT  INTO users(users_firstname, users_lastname, users_dateofbirth) VALUES(?,?,?)");

    $stmt->bindValue(1, 'aji');
     
    $stmt->bindValue(2, 'apppp');
     
    $stmt->bindValue(3, '1999-05-14');
    $stmt->execute();

    ?>
    <?php
    include "connections.php";
 $stmt= $db->prepare("DELETE FROM users WHERE users_firstname = ?");

    $stmt->bindValue(1, 'arun');
     
    ;
    $stmt->execute();

    ?>