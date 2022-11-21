<?php
include("connection1.php");

error_reporting();

 
 $rollno=$_GET['rn'];




$query="DELETE FROM students WHERE roll_no='$rollno'";


$data=mysqli_query($conn,$query);

if ($data) 
{
   echo "<script>alert('Record delete successfully')</script>";
   
 ?>
  <meta http-equiv="refresh" content="0 url=http://localhost/practice/delete%20_alert_box.php">
 <?php
}
else
{
	echo "failed to delete record";
}


?>