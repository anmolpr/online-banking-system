<?php
	session_start();
include 'pheader.php';
echo"<form action='transfermoney.php' method='POST'>
		Accountno:<br>
     <input type = 'text' name = 'accountno' placeholder='accountno' required='required'>
	 	 Amount:<br>
	 <input  type = 'text' name = 'amount' placeholder='amount' pattern='[0-9]*' required='required'>
	 <br><br>
     <input type='submit' value='Submit'>
</form>";
?>