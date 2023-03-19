

<?php
// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_sensor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Lấy dữ liệu từ database
$sql = "SELECT * FROM data_value ORDER BY id DESC LIMIT 10";
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
	

	
		$table .= "<td>" . $row["TimeStamp"] . "</td>";
	
	
    
	$table .= "</tr>";



}



echo $table;



// Đóng kết nối database
mysqli_close($conn);
?>

