<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data_sensor";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");

    if(($_POST['heartbeat']) > '40.00' && ($_POST['concentration']) > '50.00')
    {
    	$heartbeat = $_POST['heartbeat'];
    	$concentration = $_POST['concentration'];
        $username_send = $_POST['username_send'];

	    $sql = "INSERT INTO data_value (heartbeat, concentration, username_send, Date, Time)
		
		VALUES ('".$heartbeat."', '".$concentration."','".$username_send."', '".$d."', '".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error huhuhu: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>