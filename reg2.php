<?php
$firstName = $_GET['first_name'];
$middleName = $_GET['middle_name'];
$lastName = $_GET['last_name'];
?>
<html>
<center><head><h1>Student Registration Form (2 out of 6)</h1></head></center>
<form action = "reg3.php" method = "GET">
<body><center><table border = "15" cellpadding = "15" cellspacing = "5">
	
	<tr>	
	<td>
	Firstname
	</td>

	<td>
	Middlename
	</td>

	<td>
	Lastname
	</td>
	</tr>
	

	<tr>
	<td><input type = "text" name="first_name" value = "<?php echo $firstName; ?>"></td>
	<td><input type = "text" name="middle_name" value = "<?php echo $middleName; ?>"></td>
	<td><input type = "text" name="last_name" value= "<?php echo $lastName; ?>"></td>
	</tr>


	<tr>
	<br><td>Gender</td>
	<td><input type = "radio" name = "gender" value = "Male">Male</td>
	<td><input type = "radio" name = "gender" value = "Female">Female</td>
	</tr>

<td colspan = "4">
<input type="submit" value="Proceed to Next Step">
</td>

</form>
</body>
</html>
