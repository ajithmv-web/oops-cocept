
<?Php
include "connection.php";
class views extends user
{
    public function displayData()
    {
        $query = "SELECT * FROM users ";
        $result = $this->connection->query($query);
    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
               $data[] = $row;
        }
         return $data;
        }else{
         echo "No  data";
        }
    }
       
    }
    $testobj=new views();
    ?>
    

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

 $views = $testobj->displayData(); 
 foreach ($views as $row) {
     ?>
 
<tr>
<td><?php echo $row['users_firstname']; ?></td>

<td><?php echo $row['users_lastname']; ?></td>

<td><?php echo $row['users_dateofbirth']; ?></td>
<td><?php echo $row['users_password']; ?></td>

</tr>
<?php
 }
 ?>
</tbody>

        </table>