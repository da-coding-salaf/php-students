<?php
require "config.php";


$email="dacoding@gmail.com";
try {
$stmt = $conn->prepare("SELECT * from registration where email=? limit 1");
$stmt->bind_param("s", $email);
$stmt->execute();




$result = $stmt->get_result();

$arr=["name"=>"Hello"];

	$field = $result->fetch_assoc();





var_dump($field);



/* if($result->num_rows==1){

 		
     	 $hash_password=$row['password'];

     	if(password_verify($password, $hash_password)){
     		
     		$_SESSION['user_login']=1;
               $_SESSION['email']=$email;
               $_SESSION['firstname']=$row['first-name'];
               $_SESSION['lastname']=$row['last-name'];

               header("Location: dashboard.php");









     	}else{
     		echo "Incorrect password";
     	}

 }else{
     		echo "Email record not found on this platform";
     	}
*/	

$stmt->close();
}
catch (Exception $e) {
		error_log($e);
		echo $e;
		exit('Unable to make select request');
}

?>