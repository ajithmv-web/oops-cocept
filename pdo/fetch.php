<?php
//nrml db view
// include "connections.php";
// foreach ($db->query("SELECT * FROM users") as $row) {
//     echo  $row['users_firstname'].   "&nbsp;   ".$row['users_lastname']."   &nbsp   ".$row['users_dateofbirth']."<br>";
// }
?>
<?php
//view array function
// include "connections.php";
// $stmt = $db->query("SELECT * FROM users");
// while  ($row=$stmt->fetch(PDO::FETCH_NUM)) { //ASSOC,NUM,BOTH
//    echo "<pre>". var_dump($row)."</pre>";
//     // echo  $row['users_firstname'].   "&nbsp;   ".$row['users_lastname']."   &nbsp   ".$row['users_dateofbirth']."<br>";
// }
?>
<?php
//view db
// include "connections.php";
//  $stmt= $db->query("SELECT * FROM users");
//  $results=$stmt->fetchAll();
//  foreach($results as $row){
//      $fstname=htmlentities($row['1']);
//      $lastname=htmlentities($row['2']);
//      $dateofbirth=htmlentities($row['3']);
//      echo $fstname . '  '.$lastname. '   '.$dateofbirth.'<br>';
//  }

 
    // echo  $row['users_firstname'].   "&nbsp;   ".$row['users_lastname']."   &nbsp   ".$row['users_dateofbirth']."<br>";
 ?> 
 <?php
 //search
//  include "connections.php";
//  $stmt= $db->prepare("SELECT * FROM users WHERE  users_firstname= ?");//users_id= ? &&
// //  $id=3;
// //  $name="arun";
// //  $stmt->bindParam(1,$id);
// $names=array('ajith','appu','arun');
// foreach ($names  as  $name) {
//     $stmt->bindParam(1, $name);

//     //  $stmt->bindParam(1,$name);
//     $stmt->execute();
//     while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
//         $fstname=htmlentities($row['users_firstname']);
//         $lastname=htmlentities($row['users_lastname']);
//         $dateofbirth=htmlentities($row['users_dateofbirth']);
//         echo $fstname . '  '.$lastname. '   '.$dateofbirth.'<br>';
//     }
//  }
?>
 <?php
 //search
//  include "connections.php";
//  $stmt= $db->prepare("SELECT * FROM users WHERE  users_firstname= ?");//users_id= ? &&

//  $name="arun";

//     $stmt->bindParam(1, $name);

//     $stmt->execute();
//     while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
//         $fstname=htmlentities($row['users_firstname']);
//         $lastname=htmlentities($row['users_lastname']);
//         $dateofbirth=htmlentities($row['users_dateofbirth']);
//         echo $fstname . '  '.$lastname. '   '.$dateofbirth.'<br>';
//     }

?>
<?php
 //search
 include "connections.php";
 $stmt= $db->prepare("SELECT * FROM users WHERE  users_firstname= :firstname");//users_id= ? &&

     $stmt->bindValue(':firstname', 'ajith');

    $stmt->execute();
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        $fstname=htmlentities($row['users_firstname']);
        $lastname=htmlentities($row['users_lastname']);
        $dateofbirth=htmlentities($row['users_dateofbirth']);
        echo $fstname . '  '.$lastname. '   '.$dateofbirth.'<br>';
    }

?>


