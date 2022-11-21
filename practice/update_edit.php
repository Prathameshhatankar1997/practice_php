<?php
include("connection1.php");

error_reporting();

 // if($_GET['submit'])
 // {
echo $rollno=$_GET['rn'];
echo $firstname=$_GET['fn'];
echo $lastname=$_GET['ln'];
echo $email=$_GET['em'];



$query="UPDATE students SET roll_no='$rollno',first_name='$firstname',last_name='$lastname', email='$email' WHERE roll_no='$rollno'";


$data=mysqli_query($conn,$query);

if ($data) 
{
   echo "<script>alert('Record Updated')</script>";
   
 ?>
  <meta http-equiv="refresh" content="10 url=http://localhost/practice/update_edite_delete.php">
 <?php
}
else
{
	echo "failed to update";
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>edit/update</title>
	<style type="text/css">
		table
		{
		background-color: gray;
		font-family: sans-serif;
		color: white;
		border-radius:10px;
	    }
	    .input
	    {
	    	background-color: yellow;
	    	font-family: sans-serif;
	    }
	    #btn
	    {
	    	background-color: blue;
	    	border-radius: 8px;
	    	color: white;
	    	height: 30px;
	    }
	    #btn:hover
	    {
	    	background-color: orange;
	    }
	    #h1
	    {
	    	font-family: sans-serif;
	    	color: white;

	    }

	</style>
</head>
<body bgcolor="red">
  <form method="GET">
  	<br>
  	<br>
  	<br>
  	<br>
  	<br>
  	
  	
<center>
  	<table cellpadding="10">
  		<tr>
  			<td id="h1" align="center" colspan="2"><h1>Correction of details</h1></td>
  	</tr>
  			
  	<tr>
  		<td>roll_no:</td>
<td><input type="text" value="<?php echo $rollno; ?>" name="rn" class="input" required></td>
</tr>

<tr>
<td>First Name:</td>
<td><input type="text" value="<?php echo "$firstname"; ?>" class="input" name="fn" required></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" value="<?php echo "$lastname"; ?>" class="input" name="ln" required></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" value="<?php echo "$email"; ?>" class="input" name="em" required></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="submit" id="btn"></td>
</tr>
</form>
</table>
</center>

</body>
</html>

 