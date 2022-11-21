<?php
include("connection1.php");

error_reporting();



$roll_no=$_GET['rn'];
$first_name=$_GET['fn'];
$last_name=$_GET['ln'];
$email=$_GET['em'];


$query="UPDATE students SET rollno='$roll_no',firstname='$first_name',lastname='$last_name', email='$email' WHERE rollno='$roll_no'";


$data=mysqli_query($conn,$query);

if ($data) 
{
   echo "<script>alert('Record Updated')</script>";
   ?>
   <meta http-equiv="" content="0" URl="http://localhost/practice/delete_edit_update.php">
<?php
}
else
{
	echo "failed to update";
}
echo "<br>";

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
  <form>
  	<br>
  	<br>
  	<br>
  	<br>
  	<br>
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
<td><input type="text" value=""<?php echo "$rn"; ?>class="input" required></td>
</tr>

<tr>
<td>First Name:</td>
<td><input type="text" value=""<?php echo "$fn"; ?> class="input" required></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" value=""<?php echo "$ln"; ?> class="input" required></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" value=""<?php echo "$em"; ?> class="input" required></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="update data" value="update data" id="btn"></td>
</tr>
</form>
</table>
</center>

</body>
</html>

 