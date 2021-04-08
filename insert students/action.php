<?php

	// Database configuration 
	$hostname = "localhost"; 
	$username = "root"; 
	$password = ""; 
	$dbname   = "testing"; 
	 
	// Create database connection 
	$conn = mysqli_connect($hostname, $username, $password, $dbname); 
	 
	// Check connection
	if(mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}


$userData= count($_POST["name"]); 
	   if($userData > 0) {
	    for ($i=0; $i < $userData; $i++) { 
		if(trim($_POST['name'] != '') && trim($_POST['email'] != '') && trim($_POST['regno'] != '')&& trim($_POST['depart'] != '')) {
			$name   = $_POST["name"][$i];
			$email  = $_POST["email"][$i];
			$regno = $_POST["regno"][$i];
			$depart = $_POST["depart"][$i];
				$sql_u = "SELECT * FROM users WHERE name='$name'";
  	
  	$res_u = mysqli_query($conn, $sql_u);
  	if (mysqli_num_rows($res_u) > 0) {
  	  echo"Sorry... username already taken"; 	
  	}else{
			
			$query  = "INSERT INTO users(name,email,regno,depart) VALUES ('$name','$email','$regno','$depart')";
			$result = mysqli_query($conn, $query);
		} }
	    }
	    // echo "Data inserted successfully";
	}else{
	    echo "Please Enter user name";
	}

?>