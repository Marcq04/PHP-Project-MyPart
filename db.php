<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'f3448926_project1';


$con=new mysqli($servername, $username, $password, $database) or die("Unable to connect");
if(!empty($con->connect_error)){
    echo "Error :".$con->connect_error;
}else{
    echo "Connected Successfully";
}
?>