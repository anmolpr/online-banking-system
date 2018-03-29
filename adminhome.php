<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
		session_start();
	echo'<link rel="stylesheet" type="text/css" href="style.css">';
$sql="select * from deposit where admin_user_id=123 and status='no'";
$result = $conn->query($sql) or die($conn->error);
echo"<br><br>";
echo"<h3 style='color:mediumseagreen'>Account Details<h3>";
echo "<table style='width:100%;border-collapse: collapse;    background-color: #f1f1c1;border: 1px solid black;    text-align: left;'>
<tr>
<th>ifscode</th>
<th>amount</th>
<th>status</th>
</tr>";
$_SESSION["amount"]=0;
$h=0;
$h=(int)$h;
while($row = mysqli_fetch_array($result))
{
$_SESSION["ifsccode"]=$row['user_user_id'];
$h+=(int)$row['Amount'];
echo "<tr>";
echo "<td>" . $row['user_user_id'] . "</td>";
echo "<td>" . $row['Amount'] . "</td>";
echo "<td><form action='final.php' method='POST'><select name='status'><option value='yes'>yes</option><option value='no'>No</option></select>
<input type='submit' value='submit'></form></td>";
echo "</tr>";
}
echo "</table>";
echo"<br><br>";
$_SESSION["amount"]=$h;
}