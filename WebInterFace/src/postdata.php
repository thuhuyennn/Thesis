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

    if(($_POST['heartbeat']) != '1.99' && !empty($_POST['concentration']))
    {
    	$heartbeat = $_POST['heartbeat'];
    	$concentration = $_POST['concentration'];

	    $sql = "INSERT INTO data_value (heartbeat, concentration, Date, Time)
		
		VALUES ('".$heartbeat."', '".$concentration."', '".$d."', '".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>