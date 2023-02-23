<?php
require './assets/db/connect.php';

    if(!empty($_POST['fullname']) 
    && !empty($_POST['username']) 
    && !empty($_POST['password']) 
    && !empty($_POST['repassword']))
    {
    	$fullname = $_POST['fullname'];
    	$username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $telephone = $_POST['telephone'];

	    $sql = "INSERT INTO register_user 
        (fullname, 
        username, 
        password, 
        repassword, 
        birthday, 
        address, 
        email, 
        gender, 
        telephone)
		
		VALUES ('".$fullname."', 
        '".$username."', 
        '".$password."', 
        '".$repassword."',
        '".$birthday."', 
        '".$address."', 
        '".$email."', 
        '".$gender."', 
        '".$telephone."')";

		if ($conn->query($sql) === TRUE) {
		    
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>