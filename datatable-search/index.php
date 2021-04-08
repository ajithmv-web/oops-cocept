<?php
$conn=mysqli_connect("localhost","root","","sample");
$sql="SELECT * FROM users";
$query=mysqli_query($conn,$sql);
?>
<html>
<head>

<!-- DataTables CSS library -->
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- DataTables JS library -->
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
</head>
<body>
<div class="container">
<center>table</center>
<div class="container">
<table id="example1" class="display" style="width:100%">
<thead>

<tr>
<th>Fname</th>
<th>lname</th>
<th>DOB</th>
<th>pwd</th>
</tr>

</thead>
<tbody><?php
while($row=mysqli_fetch_array($query))
{?>
<tr>
<td><?php echo $row['users_firstname'];?></td>

<td><?php echo $row['users_lastname'];?></td>

<td><?php echo $row['users_dateofbirth'];?></td>
<td><?php echo $row['users_password'];?></td>


</tr>
<?php
}
?>




</tbody>









</table>
















</div>

</div>




<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>


<script>
  $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
</script>
</body></html>