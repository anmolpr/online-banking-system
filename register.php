<?php
include 'pheader.php';
	session_start();
?>
<form action='logintest.php' method='POST'>
		Userid:<br>
     <input type = 'text' name = 'userid' placeholder='Email'>
	 	 Password:<br>
	 <input  type = 'password' name = 'password' placeholder='Password'>
	 <br><br>
     <input type='submit' value="register">
</form>
