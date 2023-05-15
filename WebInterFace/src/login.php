<?php
session_start() ;
ob_start();
//Call du lieu tu form len
$username = $_POST["username"];
$password =$_POST["password"];

$conn = new mysqli('localhost', 'root', '', 'register');
//truy van du lieu-xđ xem du lieu co trong csdl khong?
$sql = "SELECT * FROM register_user WHERE username = '$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// Kiểm tra xem thông tin đăng nhập có chính xác hay không
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  
  // Lưu thông tin người dùng vào session
  session_start();
  $_SESSION['user'] = $username;
  $_SESSION['id_user'] = $row['id_user'];

  $_SESSION['username'] = $row['username'];
  $_SESSION['role'] = $row['role'];
  
  // Chuyển hướng đến trang tương ứng với vai trò của người dùng
  if ($row['role'] == 0) {
    header("Location: detail.php");
  } else {
    header("Location: HeartRate.php");
  }
} else {
    header("Location: erro.php");
  // Thông báo đăng nhập không thành công
}

//thuc thi truy vam

?>
