<?php
session_start();


if(!isset($_SESSION['user_login'])||$_SESSION['user_login']!=1){
	echo "You can't access this page without logining";
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
</head>



<style type="text/css">
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 30px;
			height: 100vh
		}input{
			font-size: 30px;
			padding: 10px
		}


</style>
<body>




<table border="1">
	
<form method="post" action="receiver.php">
	
	<tr><td colspan="2" style="font-weight: bold;text-align: center;text-transform: uppercase;">Dashboard</td></tr>
<tr><td>Email:</td><td><?php echo $_SESSION['email']?></td></tr>
<tr><td>First Name:</td><td><?php echo $_SESSION['firstname']?></td></tr>
<tr><td>Last Name:</td><td><?php echo $_SESSION['lastname']?></td></tr>




</form>

</table>


<!-- <table border="1">
	
<form method="post" action="receiver.php">
	
	<tr><td style="font-weight: bold;text-align: center;text-transform: uppercase;">Calculator</td></tr>
<tr><td><input type="number"  name="value_1" placeholder="Value 1"></td></tr>
<tr><td><input type="number"  name="value_2" placeholder="Value 2"></td></tr>

<tr><td><input type="submit"  step="" name="submit-btn" value ="Addition"></td></tr>



</form>

</table> -->








</body>
</html>