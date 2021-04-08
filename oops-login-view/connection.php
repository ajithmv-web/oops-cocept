<?php
class Dbh{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'sample';
 
    protected $connection;
 
    public function __construct(){
 
        if (!isset($this->connection)) {
 
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
 
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
 
        return $this->connection;
    }
} 
class User extends Dbh{
 
    public function __construct(){
 
        parent::__construct();
    }
 
    public function check_login($username, $password){
 
        $sql = "SELECT * FROM users WHERE users_firstname = '$username' AND users_password = '$password'";
        $query = $this->connection->query($sql);
 
        if($query->num_rows > 0){
            $row = $query->fetch_assoc();
            return $row['users_id'];
        }
        else{
            return false;
        }
    }
 
    public function escape_string($value){
 
        return $this->connection->real_escape_string($value);
    }
}
?>