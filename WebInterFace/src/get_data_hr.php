

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
$sql = "SELECT * FROM data_value WHERE username_send = '$username' ORDER BY id DESC LIMIT 11";
// $sql = "SELECT data.* FROM data
//         INNER JOIN data_user ON data.usersend = data_user.username
//         WHERE data_user.username = '$username'";
$result = mysqli_query($conn, $sql);

// Tính toán giá trị trung bình
$total = 0;
$count = 0;
while ($row = mysqli_fetch_assoc($result)) {
    if ($count < 10) {
        $total += $row["heartbeat"];
    } else {
        $latest = $row["heartbeat"];
    }
    
    $count++;
}
$average = $total / 10;

// So sáh giá trị lần thứ 11 với giá trị trung bình lần trước để tính toán phần trăm tăng hoặc giảm
$diff = $latest - $average;
$percent = ($diff / $average) * 100;

// Hiển thị giá trị phần trăm tăng hoặc giảm trên web
if ($diff > 0) {
    echo "increased " . round($percent, 1) . "% ";
} else if ($diff < 0) {
    echo " decreased " . round(abs($percent), 1) . "% ";
} else {
    echo "Temperature remained unchanged since last measurement";
}



// Đóng kết nối database
mysqli_close($conn);
?>

