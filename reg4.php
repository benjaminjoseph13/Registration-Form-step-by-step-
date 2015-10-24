<?php
$firstName = $_GET['first_name'];
$middleName = $_GET['middle_name'];
$lastName = $_GET['last_name'];
$gender = $_GET['gender'];
$month = $_GET['month']; 
$day = $_GET['day'];
$year = $_GET['year'];
?>
<html>
<center><head><h1>Student Registration Form (4 out of 6)</h1></head></center>
<form action = "reg5.php" method = "GET">
<body><center><table border = "15" cellpadding = "15" cellspacing = "5">
<link rel="stylesheet" type="text/css" href="style.css">

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
	<td><input type = "text" value = "<?php echo $firstName; ?>"></td>
	<td><input type = "text" value = "<?php echo $middleName; ?>"></td>
	<td><input type = "text" value= "<?php echo $lastName; ?>"></td>
	</tr>


	tr>
	<br><td>Gender</td>
	<?php if ($gender = "Male"):?>
	<td><input type = "radio" name = "gender" value = "Male"checked>Male</td>
	<td><input type = "radio" name = "gender" value = "Female">Female</td>
	<?php else:?>
	<td><input type = "radio" name = "gender" value = "Male">Male</td>
	<td><input type = "radio" name = "gender" value = "Female"checked>Female</td>
	<?php endif;?>
	</tr>

	<td colspan = "4">Birthday</td>
	</tr>
	<td>Month
	<select value = "month" name = "month">
	<option value = " "> </option>
	<option value = "January">January </option>
	<option value = "February">February </option>
	<option value = "March">March </option>
	<option value= "April">April </option>
	<option value = "May">May </option>
	<option value = "June">June </option>
	<option value = "July">July </option>
	<option value = "August">August </option>
	<option value = "September" >September </option>
	<option value = "October" >October </option>
	<option value = "November">November </option>
	<option value = "December">December </option>
	</select>
	</td>

	<td>
	Day
	<select value = "day" name = "day">
	<option value = " "> </option>
	<option value = "1">1 </option>
	<option value = "2"> 2</option>
	<option value = "3"> 3</option>
	<option value = "4"> 4</option>
	<option value = "5"> 5</option>
	<option value = "6"> 6</option>
	<option value = "7"> 7</option>
	<option value = "8"> 8</option>
	<option value = "9"> 9</option>
	<option value = "10"> 10</option>
	<option value = "11"> 11</option>
	<option value = "12"> 12</option>
	<option value = "13"> 13</option>
	<option value = "14"> 14</option>
	<option value = "15"> 15</option>
	<option value = "16"> 16</option>
	<option value = "17"> 17</option>
	<option value = "18" > 18</option>
	<option value = "19"> 19</option>
	<option value = "20"> 20</option>
	<option value = "21"> 21</option>
	<option value = "22"> 22</option>
	<option value = "23"> 23</option>
	<option value = "24"> 24</option>
	<option value = "25"> 25</option>
	<option value = "26"> 26</option>
	<option value = "27"> 27</option>
	<option value = "28">28 </option>
	<option value = "29">29 </option>
	<option value = "30">30 </option>
	<option value = "31">31 </option>
	</select>
	</td>

	<td>
	Year
	<select value = "year" name = "year">
	<option value = " "> </option>
	<option value = "2016">2016 </option>
	<option value = "2015">2015 </option>
	<option value = "2014"> 2014</option>
	<option value = "2013"> 2013</option>
	<option value = "2012"> 2012</option>
	<option value = "2011"> 2011</option>
	<option value = "2010"> 2010</option>
	<option value = "2009"> 2009</option>
	<option value = "2008"> 2008</option>
	<option value = "2007"> 2007</option>
	<option value = "2006"> 2006</option>
	<option value = "2005"> 2005</option>
	<option value = "2004"> 2004</option>
	<option value = "2003"> 2003</option>
	<option value = "2002"> 2002</option>
	<option value = "2001"> 2001</option>
	<option value = "2000"> 2000</option>
	<option value = "1999"> 1999</option>
	<option value = "1998"> 1998</option>
	<option value = "1997"> 1997</option>
	<option value = "1996"> 1996</option>
	<option value = "1995"> 1995</option>
	<option value = "1993"> 1994</option>
	<option value = "1993"> 1993</option>
	<option value = "1992"> 1992</option>
	<option value = "1991"> 1991</option>
	<option value = "1990"> 1990</option>
	</select>
	</td>

<tr>
	<td>
	Program
	</td>
	<td colspan = "4">
	<select name = "course">
	<option value = " "> </option>
	<option  value = "Bachelor of Science in Information Systems">Bachelor of Science in Information Systems </option>
	<option value = "Bachelor of Science in Social Works">Bachelor of Science in Social Works</option>
	<option value = "Bachelor of Science in Accountancy">Bachelor of Science in Accountancy</option>
	<option value = "Bachelor of Science in Accounting">Bachelor of Science in Accounting Technology</option>
	<option value = "Bachelor of Arts in Broadcasting">Bachelor of Arts in Broadcasting </option>
	<option value = "Associate in Computer Technology">Associate in Computer Technology </option>
	<option value = "Mass Communication Technology">Mass Communication Technology </option>
	<option value = "Nursing Assistance">Nursing Assistance </option>
	<option value = "Office Management">Office Management </option>
	<option value = "International Cookery">International Cookery </option>
	</select>
	</td>
</tr>
	<td colspan = "4">
<a href = "reg3.php"><button>Back to Step 3</a>
<input type="submit" value="Proceed to Next Step">
</td>

</form>
</body>
</html>	
