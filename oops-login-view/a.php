
        <?php
        include "connection.php";
        class displays extends user


        
        {
            public function getUsers()
            {
                $sql="SELECT * FROM users";
                $query= $this->connection->query($sql);
                if ($query->num_rows > 0) {
                    $data = array();
                while ($row=$query->fetch_assoc()) {
                    $data[] = $row;
    
                    
                }return $data;
            }else{
                echo "no data";

            }
        }      
    }
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
$testobj= new displays();
 $displays = $testobj->getusers(); 
 foreach ($displays as $row) {
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












