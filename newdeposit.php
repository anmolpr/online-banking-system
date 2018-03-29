<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
include 'pheader.php';
$amount=(int)$_POST['amount'];
$v=$_SESSION['user_id'];
$sql="select transaction_id from permission";
$result=mysqli_query($conn,$sql);
$r=mysqli_num_rows($result);
$r=$r+1;

$sqlb="insert into deposit(user_user_id,admin_user_id,amount,transaction_id,status)values('$v','123','$amount','$r','no')";
$resultb=$conn->query($sqlb);
$sqla="insert into permission(user_id,transaction_id)values('$v','$r')";
$resulta=$conn->query($sqla);
echo"Deposit request submitted";
}
