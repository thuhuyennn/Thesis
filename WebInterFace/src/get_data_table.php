

<?php
session_start();

// Kết nối database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_sensor";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//$username = $_SESSION['user'];;
 $id_user= $_SESSION['id_user'];
// Lấy dữ liệu từ database
$sql = "SELECT * FROM data_value WHERE username_send = '$id_user' ORDER BY id DESC LIMIT 30 ";
// $sql = "SELECT data.* FROM data
//         INNER JOIN data_user ON data.usersend = data_user.username
//         WHERE data_user.username = '$username'";
$result = mysqli_query($conn, $sql);



// Tạo bảng HTML
$table = "";
while($row = mysqli_fetch_assoc($result) ) {
	
	
    $table .= "<tr>";

		$table .= "<td class='px-4 py-3 text-sm'>" . $row["id"] . "</td>";
	
	

		$table .= "<td class='px-10 py-3 text-sm'>" . $row["heartbeat"] . "</td>";
	
    

		$table .= "<td class='px-10 py-3 text-sm'>" . $row["concentration"] . "</td>";
		
	
	
		if($row["heartbeat"] < 60 or $row["concentration"] < 90 or $row["heartbeat"] > 140 or $row["concentration"] >100) {
			$table .= "<td class='px-10 py-3 text-xs'><span class='px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700'>Cảnh báo</span></td>";
		} else {
			$table .= "<td class='px-10 py-3 text-xs'><span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>Bình thường</span></td>";
		}
		// $table .= "<td class='px-4 py-3 text-sm'>" . $row["username_send"] . "</td>";
	

	
		$table .= "<td class='px-4 py-3 text-sm'>" . $row["TimeStamp"] . "</td>";
	
	
    
	$table .= "</tr>";



}



echo $table;



// Đóng kết nối database
mysqli_close($conn);
?>

