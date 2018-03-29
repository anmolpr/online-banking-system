<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
include 'pheader.php';
$v=$_SESSION['user_id'];
$c=$_POST['contact'];
$e=$_POST['Email'];
$sql="insert into account_details(user_id,email,contact)values('$v','$e','$c')";
$result=$conn->query($sql)or die($conn->error);
$sq="update account set email='$e' where user_id='$v'"; 	
$result=$conn->query($sq)or die($conn->error);
$sq="update account set contact='$c' where user_id='$v'"; 	
$result=$conn->query($sq)or die($conn->error);
header("Location:home.php");
}