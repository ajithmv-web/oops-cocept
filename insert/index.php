
              </form>
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
  
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="form-group">
          <form name="add_address" id="add_address" method="POST" action="action.php">
            <table class="table table-bordered table-hover" id="dynamic_field">
            name:<br>
		<input type="text" name="name">
		<br>
	email:<br>
		<input type="text" name="email">
		<br>
		regno:<br>
		<input type="date" name="regno"><br>
        
		depart:<br>
		<select type="text" name="depart" class="form-control  ">
                                                <option>Select Type</option>
                                                <?php
                                                $conn=mysqli_connect("localhost","root","","capecom");
                                                $sql = "SELECT * FROM depart";
                                                $result = mysqli_query($conn,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                    <option><?php echo $row['depatm']; ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <br><br>

                <td><input type="text" name="address[]" placeholder="Enter your address" class="form-control name_address"/></td>
               
                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>  
              </tr>
            </table>
            
            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
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