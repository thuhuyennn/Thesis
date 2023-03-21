

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
$sql = "SELECT * FROM data_value WHERE username_send = '$username' ORDER BY id DESC LIMIT 30 ";
// $sql = "SELECT data.* FROM data
//         INNER JOIN data_user ON data.usersend = data_user.username
//         WHERE data_user.username = '$username'";
$result = mysqli_query($conn, $sql);



// Tạo bảng HTML
$table = "";
while($row = mysqli_fetch_assoc($result) ) {
	
    $table .= "<tr>";

		$table .= "<td>" . $row["id"] . "</td>";
	
	

		$table .= "<td>" . $row["heartbeat"] . "</td>";
	
    

		$table .= "<td>" . $row["concentration"] . "</td>";
		
	
	
		if($row["heartbeat"] < 50 or $row["concentration"] < 90 or $row["heartbeat"] > 100 or $row["concentration"] >100) {
			$table .= "<td class='text-red-600 font-semibold'>Cảnh báo</td>";
		} else {
			$table .= "<td class='text-blue-500 font-medium'>Bình thường</td>";
		}
		$table .= "<td>" . $row["username_send"] . "</td>";
	

	
		$table .= "<td>" . $row["TimeStamp"] . "</td>";
	
	
    
	$table .= "</tr>";



}



echo $table;



// Đóng kết nối database
mysqli_close($conn);
?>

