<?php
$host = 'localhost';
$username = "root";
$password = "";
$dbname = "register";


$conn = new mysqli($host, $username, $password, $dbname);

if($conn -> connect_error){
    die("Fail connect:". $conn -> connect_error);
}
echo "ttt"



?>
