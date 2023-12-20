<?php


require("config.php");

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];

$stmt = $conn->prepare("SELECT email from registration where email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

		
if(strlen($password)<7){
	echo "The length of your password must be >= 7";
	exit;
}

if($result->num_rows==0){

if($password==$c_password){
	try {
		$hash_password=password_hash ($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO  registration (email, `first-name`, `last-name`, password) VALUES(?,?,?,?)");
$stmt->bind_param("ssss",$email, $first_name, $last_name, $hash_password);
$stmt->execute();
echo "New records created successfully";
$stmt->close();
$conn->close();
		
	}catch (Exception $e) {
		error_log($e->getMessage());
		exit("Probably Binding Error"); 
	}
}else{

	echo "Password and confirm password must be equal";

}

}else{

	echo "Error: duplicate email, or this email has been used by someone else";

}
















?>