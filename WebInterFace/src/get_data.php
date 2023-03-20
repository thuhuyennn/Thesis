<?php
// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_sensor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Lấy dữ liệu từ database
$sql = "SELECT * FROM data_value ORDER BY id DESC LIMIT 100";
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