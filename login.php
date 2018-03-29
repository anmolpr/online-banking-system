<?php
session_start();
include 'pheader.php';
if (isset($_SESSION['user_id']))
{
		echo"you are already logged in";
}
else
{echo"
<br><br>
<form action='loggingin.php' method='POST'>
  <h2>Login to your account</h2>
	Userid:<br>
     <input type = 'text' name = 'userid' placeholder='user_id'>
	 Password:<br>
	 <input  type = 'password' name = 'password' placeholder='Password'>
	 <br><br>
	 
     <input type='submit' value='Login'>
</form>";}
?>