<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	session_start();
	include 'pheader.php';
	$v=$_SESSION['user_id'];
$sql="select * from account where user_id='$v'";
$result = $conn->query($sql) or die($conn->error);
echo"<br><br>";
echo"<h3 style='color:mediumseagreen'>Account Details<h3>";
echo "<table style='width:100%;border-collapse: collapse;    background-color: #f1f1c1;border: 1px solid black;    text-align: left;'>
<tr>
<th>Name</th>
<th>Contact</th>
<th>Date of Birth</th>
<th>CIF No</th>
<th>PAN No</th>
<th>Branch ID</th>
<th>Email</th>
<th>IFSC Code</th>
<th>Account No</th>
<th>Balance</th>
<th>userid</th>
<th>aadhar_no</th>
</tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['dob']."</td>";
echo "<td>" . $row['cifno'] . "</td>";
echo "<td>" . $row['panno'] . "</td>";
echo "<td>" . $row['branch_id']."</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['ifsccode'] . "</td>";
echo "<td>" . $row['account_no']."</td>";
echo "<td>" . $row['balance']."</td>";
echo "<td>" . $row['user_id']."</td>";
echo "<td>" . $row['aadhar_no']."</td>";
echo "</tr>";
}
echo "</table>";
echo"<br><br>";




$sq="select * from benificiary where user_id='$v'";
$result = $conn->query($sq) or die($conn->error);
echo"<br><br>";
echo"<h3 style='color:mediumseagreen'>Benificary Details<h3>";
echo "<table style='width:100%;border-collapse: collapse;    background-color: #f1f1c1;border: 1px solid black;    text-align: left;'>
<tr>
<th>Benificary Name</th>
<th>Account No</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['account_no']."</td>";
echo "</tr>";
}
echo "</table>";
echo'<ul style="color:mediumseagreen"><li> <a href="home.php">Go back</li></ul>';
}