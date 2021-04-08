




<html>
<head>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="https://example.com/example-framework.js"
        integrity="sha384-oqVuAfXRKap7fdgcCY5uykM6+R9GqQ8K/uxy9rx7HNQlGYl1kPzQho1wx4JwY8wC"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
<input type="text" class="form-control" id="search_param" placeholder="Search">
<table id="userTable" class="display" style="width:100%">
<thead>
<tr>
<th>id</th>
<th>usersfirstname</th>
<th>userslatname</th>
<th>userspassword</th>
<th>usersdateofbirth</th>
</tr>
</thead>

<tbody>

</tbody>
</table>
<script>
 
 $(document).ready(function(){
     var name="";
     getuserlist(name);
     $(document).on("keydown", "#search_param", function () {

                var search_param = $(this).val();
                getuserlist(search_param);

            });
   
});
 function getuserlist(search_param){



    $.ajax({
        url: 'server.php',
        type: 'get',
        data: {search_param: search_param},
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            var tr_str="";
            for(var i=0; i<len; i++){
                var users_id = response[i].users_id;
                var users_firstname = response[i].users_firstname;
                var users_lastname = response[i].users_lastname;
                var users_password = response[i].users_password;
                 var users_dateofbirth = response[i].users_dateofbirth;


                tr_str += "<tr>" +
                    "<td align='center'>" + users_id + "</td>" +
                    "<td align='center'>" + users_firstname + "</td>" +
                    "<td align='center'>" + users_lastname + "</td>" +
                    "<td align='center'>" + users_password + "</td>" +
                    "<td align='center'>" + users_dateofbirth + "</td>" +
                    "</tr>";

                
            }
            $("#userTable tbody").html(tr_str);

        }
    });
    }
</script>
    

</body></html>


