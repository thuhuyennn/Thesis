<?php
session_start();
// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_sensor";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$password = $_SESSION['user'];
$id_user= $_SESSION['id_user'];
// Lấy dữ liệu từ database
$sql = "SELECT * FROM data_value WHERE username_send = '$id_user' ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $sql);



// Tạo bảng HTML
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array("TimeStamp" => $row["TimeStamp"], "heartbeat" => $row["heartbeat"], "concentration" => $row["concentration"]);
}
echo json_encode($data);

// Đóng kết nối database
mysqli_close($conn);
?>