<!DOCTYPE html>
<html>
<head>
	<title>Asynchronous Registration Page</title>
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
	
	<tr><td style="font-weight: bold;text-align: center;text-transform: uppercase;">Registration</td></tr>
<tr><td><input type="text"  name="first_name" placeholder="First Name"></td></tr>
<tr><td><input type="text"  name="last_name" placeholder="Last Name"></td></tr>
<tr><td><input type="email"  name="email" placeholder="Email"></td></tr>
<tr><td><input type="password"  name="password" placeholder="Password"></td></tr>
<tr><td><input type="password"  name="c_password" placeholder="Confirm Password"></td></tr>
<tr><td><input type="submit"  step="" name="submit-btn" value ="Submit"></td></tr>



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