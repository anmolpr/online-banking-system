<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
	include 'pheader.php';
$amount=(int)$_POST['amount'];
$accountno=$_POST['accountno'];
$v=$_SESSION['user_id'];
$sql="select * from funds";
$result=$conn->query($sql);
$r=mysqli_num_rows($result);
$k=$r+1;
$sql="insert into funds(Transaction_id,To_account,Amount)values('$k','$accountno','$amount')";
$result=$conn->query($sql);
$sql="select transaction_id from funds where To_account='$accountno'";
$result=$conn->query($sql);
$r=0;
while($row = mysqli_fetch_array($result))
{
$r=$row['transaction_id'];}
$sql="insert into transfer(user_id,transaction_id)values('$v','$r')";
$result=$conn->query($sql);
$sql="insert into transfered_to(account_no,transaction_id)values('$accountno','$r')";
$result=$conn->query($sql);
$sql="select account_no from benificiary";
$balance="select balance from account where user_id='$v'";
$b = $conn->query($balance) or die($conn->error);
$bi = mysqli_fetch_array($b);
$f=(int)$bi['balance'];
$t=$f-$amount;
$t=(string)$t;
$result = $conn->query($sql) or die($conn->error);
$c=0;
while($row = mysqli_fetch_array($result)){
if ($row['account_no']==$accountno)
{
if((int)$f-$amount>0){
$sq="update account set balance='$t' where user_id='$v'"; 	
$resul=$conn->query($sq)or die($conn->error);
$balance="select balance from account where account_no='$accountno'";
$b = $conn->query($balance) or die($conn->error);
$bi = mysqli_fetch_array($b);
$g=(int)$bi['balance'];
$g+=$amount;
$g=(string)$g;
$s="update account set balance='$g' where account_no='$accountno'"; 	
$resu=$conn->query($s);
$c=1;
echo"Transfer successfull";
break;
}
else if((int)$f-$amount<=0)
{
	$c=2;
break;}
}
}
if ($c==0)
{
	//$row['accountno']==$_SESSION['accountno']
	echo"First add this account into your beneficiary"; 
}
else if($c==2)
	echo"sorry, insufficient account balance!";
}
