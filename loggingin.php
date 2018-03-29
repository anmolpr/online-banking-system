<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql="select * from user where user_id='$userid' and password='$password'";
$sqla="select * from account where user_id='$userid'";
$resulta=$conn->query($sqla);
$result=$conn->query($sql);
$rowa=$resulta->fetch_assoc();
if(!$row=$result->fetch_assoc())
{
echo "your password or username incorrect";
}
else{
	$_SESSION['user_id']=$row['user_id'];
	$_SESSION['selfacc']=$rowa['account_no'];
header("Location: home.php");
}
}


