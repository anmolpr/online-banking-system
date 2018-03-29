<?php
$conn = mysqli_connect("localhost","root","","netbanking dbms");
if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
$name=$_POST['name'];
$contact=$_POST['contact'];
$DOB=$_POST['DOB'];
$cifno=$_POST['CIF_No'];
$panno=$_POST['PAN_No'];
$branchid=$_POST['Branch_id'];
$Email=$_POST['Email'];
$ifsccode=$_POST['IFSC_code'];
$userid=$_POST['userid'];
$sql="select * from account";
$result=mysqli_query($conn,$sql);
$r=mysqli_num_rows($result);
$r=$r+1;
$sq="insert into account(name,contact,dob,cifno,panno,branch_id,Email,ifsccode,account_no,user_id)values
('$name','$contact','$DOB','$cifno','$panno','$branchid','$Email','$ifsccode','$r','$userid')";
$result=$conn->query($sq);
if($result)
{echo "login to continue!";
	header("Location:project.php");}
else{
	echo"duplicate entries entered";
	echo'<a href="project.php">Home</a>';
	}	
}
?>




