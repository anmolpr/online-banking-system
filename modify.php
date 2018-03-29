<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
include 'pheader.php';
echo"<form action='r.php' method='POST'> Contact : <input type = 'text' name='contact' pattern='[0-9]{10}' required='required'>
	 <br>
Email     : <input type = 'text' name='Email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' required='required'>
<input type='submit' value='Modify'>
</form>";
}
