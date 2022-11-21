<?php
include("connection1.php");
error_reporting();
?>

<!DOCTYPE html>
<html>
<head>
	<title>adding detele button in fetched data table</title>
</head>
<body>
<table border="2">
   <tr>
   	  <th>Roll No</th>
   	  <th>First Name</th>
   	  <th>Last Name</th>
   	  <th>Email</th>
   	  <th>Password</th>
   	  <th>Confirm Password</th>
   	  <th>Operations</th>
  </tr>	




<?php

$query="SELECT * FROM students";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data))
	 {
		echo "<tr>
   	             <td>".$result['roll_no']."</td>
   	  <td>".$result['first_name']."</td>
   	  <td>".$result['last_name']."</td>
   	  <td>".$result['email']."</td>
   	  <td>".$result['password']."</td>
   	  <td>".$result['confirmpassword']."</td>
   	  <td><a href='delete.php?rn=$result[roll_no]'>Delete</td>
  </tr>	";
	 }
}
else
{
	echo "failed to insert data";
}

?>