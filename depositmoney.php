<?php
$conn = mysqli_connect("localhost","%","","netbanking");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
session_start();
include 'pheader.php';
$amount=(int)$_POST['amount'];
$v=$_SESSION['ifsccode'];
$balance="select balance from account where ifsccode=$v";
$b = $conn->query($balance) or die($conn->error);
$bi = mysqli_fetch_array($b);
$f=(int)$bi['balance'];
$f+=$amount;
$f=(string)$f;
$c=0;
$sq="update account set balance='$f' where ifsccode='$v'"; 	
$resul=$conn->query($sq)or die($conn->error);
echo"Deposit successfull";
}
