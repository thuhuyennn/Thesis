<?php
require './assets/db/connect.php';

    if(!empty($_POST['firstname']) 
    && !empty($_POST['lastname']) 
    && !empty($_POST['password']) 
    && !empty($_POST['repassword']))
    {
    	$firstname = $_POST['firstname'];
    	$lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $telephone = $_POST['telephone'];

	    $sql = "INSERT INTO register_user 
        (firstname, 
        lastname, 
        password, 
        repassword, 
        birthday, 
        address, 
        email, 
        gender, 
        telephone)
		
		VALUES ('".$firstname."', 
        '".$lastname."', 
        '".$password."', 
        '".$repassword."',
        '".$birthday."', 
        '".$address."', 
        '".$email."', 
        '".$gender."', 
        '".$telephone."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>