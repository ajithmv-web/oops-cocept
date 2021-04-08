<?php
$conn=mysqli_connect("localhost","root","","sample");




$where = 'where 1 ';

if(isset($_GET["search_param"]) && !empty($_GET["search_param"])) {
    $search_param = mysqli_real_escape_string($conn, $_GET["search_param"]);
  
  $where .=" and (regno like '%$search_param%' or  name like '%$search_param%' or stname like '%$search_param%')";
  
}

if(isset($_GET["searchfa"]) && !empty($_GET["searchfa"])) {
    $searchfa= mysqli_real_escape_string($conn, $_GET["searchfa"]);
  
  $where .=" and (fathername like '%$searchfa%')";
  
}

if(isset($_GET['dept_id']) && !empty($_GET['dept_id'])) { 
	
    $where .=" AND department='".$_GET['dept_id']."'";
     
}


 $sql="SELECT * FROM students INNER JOIN depart ON students.department = depart.id $where";

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
