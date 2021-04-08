<?php
class Students
{
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $database   = "sample";
    public $con;


    // Database Connection
    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } else {
            return $this->con;
        }
    }
    public function insertData($post)
    {
        $stureg= $this->con->real_escape_string($_POST['stureg']);
        $stuname= $this->con->real_escape_string($_POST['stuname']);
        $studob= $this->con->real_escape_string($_POST['studob']);
        $departid= $this->con->real_escape_string($_POST['departid']);
        $query="INSERT INTO students(regno,name,dob,department) VALUES('$stureg','$stuname','$studob','$departid')";
        $sql = $this->con->query($query);
        if ($sql==true) {
            echo "reg sucessful";
        } else {
            echo "Registration failed try again!";
        }
    }
 

public function selectdepart()

{


    $query = "SELECT * FROM depart";
    $result = $this->con->query($query);
if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
           $data[] = $row;
    }
     return $data;
    }else{
     echo "No found records";
    }
}



public function displayData()
		{
		    $query = "SELECT * FROM students";
		    $result = $this->con->query($query);
		if ($result->num_rows > 0) {
		    $data = array();
		    while ($row = $result->fetch_assoc()) {
		           $data[] = $row;
		    }
			 return $data;
		    }else{
			 echo "No found records";
		    }
		}

}

?>


