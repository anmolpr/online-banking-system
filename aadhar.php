<?php
	session_start();
	include 'pheader.php';
	echo"
<form action='newaadhar.php' method='POST'>
	 <input  type = 'text' name = 'adhr' placeholder='Aadhar no.' pattern='[0-9]{12}' required='required'>
	 <br><br>
     <input type='submit' value='link aadhar'>
</form>";
?>