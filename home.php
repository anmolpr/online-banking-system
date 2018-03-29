<?php
session_start();
include 'pheader.php';
$conn = mysqli_connect("localhost","root","","netbanking dbms");
$uid=$_SESSION['user_id'];
$sql="select * from account where user_id='$uid'";
$result=$conn->query($sql) or die($conn->error);
$row = mysqli_fetch_array($result);
$r=$row['aadhar_no'];
if (isset($_SESSION['user_id']))
{
	echo '<div style="height:80%;background-color: grey;background-image: url(bg6.jpg);background-size: 1150px 400px;opacity: 0.8;">
<ul style="    padding: 25px 50px 75px 100px;color: white;">
<li><a href="accountdetails.php" >Account Details</a></li>
&nbsp&nbsp&nbsp
<li><a href="deposit.php">Loan request</a></li>
&nbsp&nbsp&nbsp
<li><a href="transfer.php">Transfer</a></li>
&nbsp&nbsp&nbsp
<li><a href="benificiary.php">Add Benificiary</a></li>
&nbsp&nbsp&nbsp
<li><a href="Modify.php">Modify Details</a></li>
</ul>
</div>';
if($r=='not linked'){
echo'<footer><a href="aadhar.php" style="margin-left: 500px; font-size: 150%; color:forestgreen;">Link aadhar</a></footer>';}
echo'</body>
</html>';
}
else
{
	echo"you are not logged in";
}
?>
