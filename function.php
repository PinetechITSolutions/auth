<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'signup');
class DB_con
{
    public function __construct()
    {
        $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbh = $con;
// Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }
    public function insert($first_name, $last_name, $email, $password, $date_of_birth)
    {
        $ret = mysqli_query($this->dbh, "insert into insertdata(first_name,last_name,email,password,date_of_birth) values('$first_name','$last_name','$email','$password','$date_of_birth')");
        return $ret;
    }
}
