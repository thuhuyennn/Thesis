

<?php
session_start();

// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_sensor";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$username = $_SESSION['user'];

// Lấy dữ liệu từ database
$sql = "SELECT * FROM data_value WHERE username_send = '$username' ORDER BY id DESC LIMIT 10";
// $sql = "SELECT data.* FROM data
//         INNER JOIN data_user ON data.usersend = data_user.username
//         WHERE data_user.username = '$username'";
$result = mysqli_query($conn, $sql);

// Tính toán giá trị trung bình
$total = 0;
$count = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $total += $row["heartbeat"];
    $count++;
}
$average = $total / $count;
$average_rounded = round($average, 1);

// Hiển thị giá trị trung bình trên web
echo " " . $average_rounded . " pbm";



// Đóng kết nối database
mysqli_close($conn);
?>

