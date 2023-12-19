<?php

require('config.php');

$email=$_POST['email'];
$password=$_POST['password'];



try {
$stmt = $conn->prepare("SELECT * from registration where email=? limit 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
 if($result->num_rows==1){

 		$row = $result->fetch_assoc();
     	 $hash_password=$row['password'];

     	if(password_verify($password, $hash_password)){
     		
     		echo "Correct password";

     	}else{
     		echo "Incorrect password";
     	}

 }else{
     		echo "Email record not found on this platform";
     	}
	

$stmt->close();
}
catch (Exception $e) {
		error_log($e);
		echo $e;
		exit('Unable to make select request');
}



?>