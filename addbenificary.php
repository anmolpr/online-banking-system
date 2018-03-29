<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
	include 'pheader.php';
$name=$_POST['name'];
$accountno=$_POST['accountno'];
$v=$_SESSION['user_id'];
$chk=$_SESSION['selfacc'];
$sql="select account_no from account";
$result = $conn->query($sql) or die($conn->error);
$c=0;
if($accountno== $chk)
{
echo"You cannot add yourself as beneficiary!";}
else{
while($row = mysqli_fetch_array($result)){
if ($row['account_no']==$accountno)
{
$confirm="select account_no from benificiary where user_id='$v'";
$resul=$conn->query($confirm)or die($conn->error);
while($r = mysqli_fetch_array($resul)){
if ($r['account_no']==$accountno){
echo"Benificiary already added";
$c=2;
break;
}}
if($c==2)
{break;}
else{
$sq="insert into benificiary(name,account_no,user_id)values('$name','$accountno','$v')"; 	
$resul=$conn->query($sq);
$c=1;
echo"Benificiary added successfully";
break;}
}
}
}
if ($c==0)
{
	echo"invalid account no"; 
}
}