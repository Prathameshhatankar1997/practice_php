
<?php
include("connection1.php");
error_reporting(0);
echo "<br>";
session_start();

// if(isset($_POST=['submit']))
//    {
   echo $Username=$_POST['Username'];
    echo $password=$_POST['Password'];

$query="SELECT * FROM students WHERE first_name='$Username' && password='$password'";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

// //echo $total;
 if($total==1)
 {
 	//echo "login successful";
    $_SESSION['Firstname']=$Username;
  header('location:username_display_login_successful.php');
 }
 else
 {
  echo "<font color='red'>login unsuccess";
 }




?>





<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
	<style type="text/css">
		.input
		{
			width: 500px;
			border-color: blue;
			height: 25px;
			border-radius: 10px;
			color: red;
		}
		#btn
		{
			background-color: green;
			color: white;
			height: 30px;
		}
		#btn:focus
		{
			background-color: red;
			transition-duration: 0s;
			

		}
		#btn:hover
		{
			background-color: orange;
		}
	</style>
</head>
<body>
	<form method="POST">
	<center>
	<table border="0" align="center" cellspacing="5" cellpadding="10">
	<tr>
<td>User Name:</td>
<td><input type="text" name="Username" class="input" placeholder="User name"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="Password" name="Password" class="input" placeholder="Password"></td>
</tr>

<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value="LOGIN" id="btn"></td>
</tr>
</table>
</center>
</form>
</body>
</html>
 

