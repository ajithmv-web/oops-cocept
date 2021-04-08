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
 
  $sql = "SELECT users.name,users.regno,users.email,users.depart, stu.id, GROUP_CONCAT(address) FROM users INNER JOIN stu ON users.id = stu.id group by users.id";
  $result=mysqli_query($conn, $sql);
  $sql1="SELECT stu.id,
  GROUP_CONCAT(address)
FROM
  users INNER JOIN  stu ON users.id = stu.id group by users.id";
  $result1=mysqli_query($conn, $sql1);

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
  <table id="example1" class="display" style="width:100%">
   <thead>
                          <tr>  <th>id</th>
                               <th>regno</th>  
                               <th>name</th> 
                               <th>email</th> 
                               <th>depart</th>  
                                <th>address</th>  
                                <th>view</th>
                          </tr>  </thead>
                           <tbody>
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while ($row = mysqli_fetch_array($result)) {
                                   ?>  
                          <tr>  
                               <td><?php echo $row["regno"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               <td><?php echo $row["depart"]; ?></td> 
                            <td><?php echo $row["GROUP_CONCAT(address)"]; ?></td> 
                              
                               <td><a href="update.php?id=<?php echo $row["id"]; ?>">edit</a></td> 
                          </tr>  
                          <?php
                               } 
                          }  
                          ?>  
                          </tbody>
                     </table>    
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
      </body>  
 </html>  
