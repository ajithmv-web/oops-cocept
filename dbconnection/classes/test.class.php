<?php
class Test extends Dbh{
    public function getUsers(){
        $sql="SELECT * FROM users";
        $stmt= $this->connect()->query($sql);
        while ($row=$stmt->fetch()){
            echo "fname: ".$row['users_firstname']."   lastname: ".$row['users_lastname']."<br>";
        }

    }
    public function getUsersStmt($firstname, $lastname){
        $sql="SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ? ";
        $stmt= $this->connect()->prepare($sql); 
        $stmt->execute([$firstname, $lastname]);
        $names =$stmt->fetchAll();
         foreach($names as $name){ 

             echo $name['users_dateofbirth'].'<br>';
         }
    }
    // public function getUsersStmt($usersid){
    //     $sql="SELECT * FROM users WHERE users_id = ? ";
    //     $stmt= $this->connect()->prepare($sql); 
    //     $stmt->execute([$usersid]);
    //     $names =$stmt->fetchAll();
    //      foreach($names as $name){ 

    //          echo "fstname: " .$name['users_firstname']." <br>lastname:  ".$name['users_lastname']." <br>dob:  ".$name['users_dateofbirth'];
    //      }
  
  // }




  public function setUsersStmt($firstname, $lastname,$dob){
    $sql=" INSERT INTO  users(users_firstname,users_lastname,users_dateofbirth) VALUES(?,?,?)";
    $stmt= $this->connect()->prepare($sql); 
    $stmt->execute([$firstname,  $lastname, $dob]);
    
}
}





?>