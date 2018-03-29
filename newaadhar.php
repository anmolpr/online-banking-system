<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
include 'pheader.php';
$adhr=$_POST['adhr'];
$v=$_SESSION['user_id'];
$s="update account set aadhar_no='$adhr' where user_id='$v'";
$result=$conn->query($s);
echo"Your account is linked with aadhar!";
}
