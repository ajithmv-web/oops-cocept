<?php
 $hostname = "localhost"; 
 $username = "root"; 
 $password = ""; 
 $dbname   = "testing"; 
  
 
 $conn = mysqli_connect($hostname, $username, $password, $dbname); 
  

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = " .$id;

    $result = mysqli_query($conn, $query);
 $row= mysqli_fetch_assoc($result);
}
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $i = $_GET['id'];
    
    $query = "SELECT * FROM stu  WHERE id =" .$i;

    $results= mysqli_query($conn, $query);
    // $row1= mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="card text-center" style="margin-bottom:50px;">
 
</div>

<form method="POST" name="add_address" id="add_address" method="POST" action="action.php">
            <table class="table table-bordered table-hover" id="dynamic_field">
 name:<br>
		<input type="text" name="name"  value="<?php echo $row['name']; ?>">
		<br>
	email:<br>
		<input type="text" name="email" value="<?php echo $row['email']; ?>">
		<br>
		regno:<br>
		<input type="date" name="regno" value="<?php echo $row['regno']; ?>"><br>
    <!-- <input type="text" name="address" value="<?php echo $row1['address']; ?>"><br> -->
		depart:<br>
		<select type="text"  name="depart" >
                                                <option  value="<?php echo $row['depart']; ?>">Select Type</option>
                                                <?php
                                                $conn=mysqli_connect("localhost","root","","capecom");
                                                $sql = "SELECT * FROM depart";
                                                $result = mysqli_query($conn,$sql);
                                                while ($row2 = mysqli_fetch_array($result)) {
                                                ?>
                                                    <option><?php echo $row2['depatm']; ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <td> <?php
                                            if (mysqli_num_rows($results) > 0) {
                                                while ($row1= mysqli_fetch_array($results)) {
                                                    ?>  
       
                <input type="text" name="address[]" placeholder="Enter your address" value="<?php echo $row1['address']; ?>"class="form-control name_address"/>
                               <?php
                                                }
                                            } ?> </td>
                               <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>
                               </tr>
            </table>
            
            <input type="submit"  name="submit"value="submit" id="submit">
            
          </form>
        </div>
      </div>
    <div class="col-md-1"></div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){

    var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="address[]" placeholder="Enter your Name" class="form-control name_address"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
    });

    $(document).on('click', '.btn_remove', function(){  
      var button_id = $(this).attr("id");   
      $('#row'+button_id+'').remove();  
    });

    $("#submit").on('click',function(){
      var formdata = $("#add_address").serialize();
      $.ajax({
        url   :"action.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#add_address")[0].reset();
        }
      });
    });
  });
</script>