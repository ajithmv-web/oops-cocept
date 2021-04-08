<?php

session_start();
?>
<html>
<body>
<?php
include "cons.php";
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
       
        $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
        $stmt = $db->prepare("SELECT * FROM users WHERE users_firstname = ?");
        $stmt->bindparam('s', $_POST['username']);
        $stmt->execute();
        $results = $stmt->get_result();
    	$user = $results->fetch_object();
    		
    	
    	if ( password_verify( $_POST['password'], $user->users_password ) ) {
    		$_SESSION['user_id'] = $user->ID;
    	}
        echo "ok";
    }
}

// if ( isset( $_SESSION['user_id'] ) ) {
    
// } else {
   
//     header("Location: .php");
// }
?>
<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Submit">
</form>


</body></html>
