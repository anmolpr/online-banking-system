<?php
session_start();
include 'pheader.php'
?>
<?php
if (isset($_SESSION['ifsccode']))
{
		echo"you are already logged in";
}
else
{
	echo "
	<form action='project.inc.php' method='POST'>
		  <h2>Register your account</h2>
         Name: <input type = 'text' name='name' required='required'>
         <br>
         Contact : <input type = 'text' name='contact' pattern='[0-9]{10}' required='required'>
	 <br>
	 Date of birth: <input  type = 'date' name='DOB' required='required'>
         <br>
        CIF_No     : <input type = 'text' name='CIF_No' required='required'>
         <br>
PAN No:<input type = 'text' name ='PAN_No' pattern='[A-Za-z]{5}\d{4}[A-Za-z]{1}' required='required'>
<br>
Branch id:<input type = 'text' name ='Branch_id' required='required'>
<br>
Email     : <input type = 'text' name='Email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' required='required'>
         <br> 		 
IFSC code     : <input type = 'text' name='IFSC_code' required='required'>
<br><br>
userid     : <input type = 'text' name='userid' required='required'>

<input type='submit' value='Sign up'>
</form>
</body>
</html>
";
}
?>

