<?php
	$hostname = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname   = "testing"; 
	 
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname); 
	 

	if(mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
   
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $regno = $_POST["regno"];
        $depart = $_POST["depart"];
       
       
        $sql = "INSERT INTO users (name,email,regno,depart)
         VALUES ('$name','$email','$regno','$depart')";
        mysqli_query($conn, $sql);
        
    
        $lastid = mysqli_insert_id($conn);
    
$userData= count($_POST["address"]); 
if ($userData > 0){
    for ($i=0; $i <$userData; $i++) {
        $address = $_POST["address"][$i];
    
        $sql= "INSERT INTO  stu(id,address) VALUES('$lastid','$address')";
        mysqli_query($conn, $sql);
    }
}
      echo "Data inserted successfully";
}
	


?>