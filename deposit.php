<?php
	session_start();
include 'pheader.php';
echo"<form action='newdeposit.php' method='POST'>
	 <input  type = 'text' name = 'amount' placeholder='Amount' pattern='[0-9]*' required='required'>
	 <br><br>
     <input type='submit' value='Submit'>
</form>";
?>