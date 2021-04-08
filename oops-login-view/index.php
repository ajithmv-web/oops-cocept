<html>
<head>
</head>
<body>

<?php

session_start();
 
include_once('connection.php');
 
$user = new User();
 
if(isset($_POST['login'])){
	$username = $user->escape_string($_POST['username']);
	$password = $user->escape_string($_POST['password']);
 
	$auth = $user->check_login($username, $password);
 
	if(!$auth){
		$_SESSION['message'] = 'Invalid username or password';
    
	}
	else{
		$_SESSION['usersname'] = $auth;
		header('location:a.php');
	}
}

?>
<form method="POST" action="">

		                	
		                    	<input class="form-control" placeholder="Username" type="text" name="username" required><br/>
		                
		                    	<input class="form-control" placeholder="Password" type="password" name="password" required>
		                	
                                <input type="submit" name="login">
                         
		        	</form>
		    	<?php
		    	if(isset($_SESSION['message'])){
		    		?>
		    			<div class="alert alert-info text-center">
					        <?php echo $_SESSION['message']; ?>
					    </div>
		    		<?php
 
		    		unset($_SESSION['message']);
		    	}
		    ?>
		</div>
	</div>
</body>
</html>