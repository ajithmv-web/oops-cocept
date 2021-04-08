<html><head>
</head>
<bod>
</bod><table id="example1" class="table table-bordered ">
                                    <thead>
                                        <tr class="bg-dark">
                                           
                                            <th>ID</th>
                                            <th>fName</th>
                                            <th>lastname</th>
                                            <th>userspwd</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     
                                         include "connections.php";
                                        $stmt = $db->query("SELECT * FROM users");
                                        $results=$stmt->fetchAll();
                                         foreach($results as $row) {

                                        
                                    ?>
                                        <tr>
                                            
                                        <td><?php echo($row['users_id']); ?></td>
                                            <td><?php echo($row['users_firstname']); ?></td>
                                            <td><?php echo($row['users_lastname']); ?></td>
                                            <td><?php echo($row['users_password']); ?></td>
                                            
                                            <!-- <td>
                                                <a class="btn btn-warning" href="./edit_user.php?user=<?php echo($row['id']); ?>">EDIT</a>
                                            </td> -->
                                           
                                        </tr>
                                        <?php } ?>
                                    
</body>
</html>
