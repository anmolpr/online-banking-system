<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
$userid=$_POST['userid'];
$ifsccode=$_SESSION['ifsccode'];
$password=$_POST['password'];
$sq="insert into user(user_id,password)values('$userid','$password')";
$result=$conn->query($sq);

echo $sq;
header("Location:register2.php");	
	session_destroy();

}
?>

