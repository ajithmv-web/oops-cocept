<?php
$conn=mysqli_connect("localhost","root","","sample");

if($_GET["search_param"])  {
    $search_param = mysqli_real_escape_string($conn, $_GET["search_param"]);
  
  $sql=" WHERE regno like '%$search_param%' or  name like '%$search_param%' or stname like '%$search_param%'";
  
}
elseif(isset($_GET['dept_id']) && !empty($_GET['dept_id'])) { 
	
    $sql = "SELECT * FROM students INNER JOIN depart ON students.department = depart.id WHERE department='".$_GET['dept_id']."'";
     $ap=$_GET['dept_id'];
}else{ 
	
    $sql = "SELECT * FROM students INNER JOIN depart ON students.department = depart.id";
    
}
echo "vale". $ad.$ap;


    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    $num = mysqli_num_rows($res);

    $json = array();
    if ($num > 0) {
        while ($obj=mysqli_fetch_object($res)) {
            $json[] = $obj;
        }
    }
 echo json_encode($json);


?>
