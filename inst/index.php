
<?php


include 'st.php';

$testObj= new Students();
if(isset($_POST['submit'])) {
    $testObj->insertData($_POST);

}

?>


<html lang="en">
<head>
<title>hii</title>
</head>
<body>
<h1> student Login</h1>
<form action="insert.php" method="POST" >

STUDENT REGNO:  <input type="text" name="stureg" id="stureg" placeholder=" Enter student regno"><br/><br/>
STUDENT NAME:   <input type="text" name="stuname" id="stuname" placeholder=" Enter student name"><br/><br/>
STUDENT DOB:  <input type="date" name="studob" id="studob"><br/><br/>
STUDENT DPID:  <select type="text" name="departid">
                                                <option>Select Type</option>
                                            

<?php

$names=$testObj->selectdepart();


foreach($names as $nam)

 { ?>
   <option><?php echo $nam['id'];?></option>
<?php
} ?>
</select>
 
  <br/><br/>  


<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
