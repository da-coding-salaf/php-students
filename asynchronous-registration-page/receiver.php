<?php


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backend-project";

// Create connection
try{
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");
}
 catch (Exception $e) {
	error_log($e->getMessage());
	//echo $e->getMessage().'1266.4.5.7.8';
	//echo "<br>";
	exit("Error connecting to the database");	
	}



$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];


try {
$stmt = $conn->prepare("INSERT INTO  registration (email, `first-name`, `last-name`, password) VALUES(?,?,?,?)");
$stmt->bind_param("ssss",$email, $first_name, $last_name, $password);
$stmt->execute();
echo "New records created successfully";
$stmt->close();
$conn->close();
		
	}catch (Exception $e) {
		error_log($e->getMessage());
		exit("Probably Binding Error"); 
	}













?>