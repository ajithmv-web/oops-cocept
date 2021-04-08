<?php
$conn=mysqli_connect("localhost","root","","sample");

if (isset($_GET["search_param"])) {
    $search_param = mysqli_real_escape_string($conn,$_GET["search_param"]);
    $sql = "SELECT * FROM users where users_firstname like '%$search_param%' or users_lastname like '%$search_param%' or users_id like '%$search_param%' or users_password like '%$search_param%'";
  
}
else{
    $sql = "SELECT *from  users  ";
}

$res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$num = mysqli_num_rows($res);

$json = array();
if($num > 0)
{
    while ($obj=mysqli_fetch_object($res))
    {
        $json[] = $obj;
    }
}
$as= json_encode($json);
 echo $as;
?>
