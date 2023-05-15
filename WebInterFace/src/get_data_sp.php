

<?php
session_start();

// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_sensor";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$username = $_SESSION['user'];
$id_user= $_SESSION['id_user'];
// Lấy dữ liệu từ database
$sql = "SELECT * FROM data_value WHERE username_send = '$id_user' ORDER BY id DESC LIMIT 11";
// $sql = "SELECT data.* FROM data
//         INNER JOIN data_user ON data.usersend = data_user.username
//         WHERE data_user.username = '$username'";
$result = mysqli_query($conn, $sql);

// Tính toán giá trị trung bình
$total = 0;
$count = 1;
$latest = 0;
while ($row = mysqli_fetch_assoc($result)) {
    if ($count < 11) {
        $total += $row["concentration"];
    } else {
        $latest = $row["concentration"];
    }
    $count++;
}
if($total != 0){
    $average = $total / 10;
}else{
    $average=1;
}

// So sánh giá trị lần thứ 11 với giá trị trung bình lần trước để tính toán phần trăm tăng hoặc giảm
$diff = $latest - $average;
$percent = ($diff / $average) * 100;

// Hiển thị giá trị phần trăm tăng hoặc giảm trên web
if ($diff > 0) {
    echo "increased " . round($percent, 1) . "%";
} else if ($diff < 0 && $diff != -1)  {
    echo "decreased " . round(abs($percent), 1) . "%";
}
else if ( $diff = -1)  {
    echo "_ _ _ %";
    

}
else {
    echo "Stable";
}



// Đóng kết nối database
mysqli_close($conn);
?>

