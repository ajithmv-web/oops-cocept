<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
<body>
<form>
<input type="text" class="form-control" name="search_param" id="search_param" placeholder="Search">
<select name="dept_id" id="depart">
      <option value="" selected="selected" >Select Type</option> 
<?php
include "st.php";
$testObj= new Students();
$names=$testObj->selectdepart();


foreach($names as $nam)

 { ?>
   <option value="<?php echo $nam['id'];?> "><?php echo $nam["name"]; ?></option>
<?php
} ?>
</select>

<input type="text" class="form-control" name="searchfa" id="searchfa" placeholder="Search">
</form>
<table id="userTable" class="display" style="width:100%">
<thead>
<tr>
<th>regno</th>
<th>stname</th>
<th>dob</th>
<th>name</th>
<th>fathername</th>

</tr>
</thead>

<tbody>

</tbody>
</table>
<script>

    
     
    $(document).on("keyup", "#search_param", function () {

       
        getuserlist();
    });
    $(document).on("change", "#depart", function () {
        getuserlist();
    });
    $(document).on("keyup", "#searchfa", function () {
        getuserlist();
    });



function getuserlist(){

    var search_param = $("#search_param").val();
    var searchfa= $("#searchfa").val();
    var depart= $("#depart").val();


    $.ajax({
        url: 'db.php',
        type: 'get',
        data:{search_param:search_param ,dept_id:depart ,searchfa:searchfa},
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            var tr_str="";
            for(var i=0; i<len; i++){
               
                var regno = response[i].regno;
                var stname = response[i].stname;
                var dob= response[i].dob;
                var name = response[i].name;
                var fathername = response[i].fathername;
                 
                    tr_str += "<tr>" +
                    "<td align='center'>" + regno + "</td>" +
                    "<td align='center'>" + stname + "</td>" +
                    "<td align='center'>" +  dob + "</td>" +
                    "<td align='center'>" + name + "</td>" +
                    "<td align='center'>" + fathername + "</td>" +
                    "</tr>";

                
            }
            $("#userTable tbody").html(tr_str);

        }
    });
    }
</script>   

</body>
</html>