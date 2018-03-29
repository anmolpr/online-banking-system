<?php
	session_start();
include 'pheader.php'
?>
<form action='addbenificary.php' method='POST'>
		Name:<br>
     <input type = 'text' name = 'name' placeholder='name'>
	 	 Account no:<br>
	 <input  type = 'text' name = 'accountno' placeholder='accountno'>
	 <br><br>
     <input type='submit' value="register">
</form>