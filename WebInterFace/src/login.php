<?php
session_start() ;
//Call du lieu tu form len
$username = $_POST["username"];
$password =$_POST["password"];

$conn = new mysqli('localhost', 'root', '', 'register');
//truy van du lieu-xđ xem du lieu co trong csdl khong?
$sql = "SELECT * FROM register_user WHERE username = '$username'";
$result = $conn->query($sql)->fetch_assoc();



if($result['password'] == $password){
    $_SESSION['user'] = $username;
    header("location: h.php");
}
else{
    header("location: erro.php");
}

$conn->close();


//thuc thi truy vam

?>
