<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "testing";
$conn=mysqli_connect($servername,$username,$password,"$dbname");


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $regno = $_POST['regno'];
    $depart = $_POST['depart'];
    $address = $_POST['address'];
    $sql = "INSERT INTO users (name,email,regno,depart)
	 VALUES ('$name','$email','$regno','$depart')";
    mysqli_query($conn, $sql);
    $lastid = mysqli_insert_id($conn);
    
     $sql= "INSERT INTO  stu(id,address) VALUES('$lastid','$address')";
     mysqli_query($conn, $sql);
}

 

?>
<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="">
		name:<br>
		<input type="text" name="name">
		<br>
	email:<br>
		<input type="text" name="email">
		<br>
		regno:<br>
		<input type="date" name="regno"><br>
        adress:
	<input type="text" name="address"><br><br>	<br>
		depart:<br>
		<select type="text" name="depart" class="form-control  ">
                                                <option>Select Type</option>
                                                <?php
                                                $conn=mysqli_connect("localhost","root","","capecom");
                                                $sql = "SELECT * FROM depart";
                                                $result = mysqli_query($conn,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <option><?php echo $row['depatm']; ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <br><br>
       
		<input type="submit" name="save" value="submit">
	</form>
  </body>
</html>