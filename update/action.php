
 
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
   
    $address = $_POST["address"];
   
    
    $sql="UPDATE  users SET name='$name', email='$email', depart='$depart' WHERE regno='$regno'";
    mysqli_query($conn, $sql);
   
    
// $userData= count($_POST["address"]); 
// if ($userData > 0) {
//     for ($i=0; $i <$userData; $i++) {
        if (isset($_GET["id"])) {
            $count=count($_GET["id"]);
    
        for ($i=0;$i<$count;$i++) {
            $sql= "UPDATE stu SET  address='" . $_POST['address'][$i] . "' WHERE id='" . $_GET['id'][$i] . "'";
    
            mysqli_query($conn, $sql);
        
    }
}

}


?>
