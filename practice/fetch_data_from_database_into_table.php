<?php
include("connection1.php"); //to make a coonection with database use a connection file
error_reporting();// this is  use to show errors , if you did not want to show any errors simply write (0) Zero.
?>

<!DOCTYPE html>
<html>
<head>
	<title>fetch data</title>
</head>
<body>
<table border="2">
	<tr>
		<th>roll_no</th>
		<th>first_name</th>               <!-- to make a table heading -->
		<th>last_name</th>
		<th>email</th>
		<th>Password</th>
		<th>Confirm password</th>
	</tr>	
	


 <?php

$query="SELECT * FROM students";//      SELECT all from table name "students"

$data=mysqli_query($conn,$query); //connection check kar and connection ho raha he to query ko bhi chala de.

$total=mysqli_num_rows($data);//   this show the number of rows 

if($total!=0) // agar total  equal to zero nahi he (jab tak rows zero nahi hote)
{
	// ek kam ko bar bar repeat karne keliye haam loop ka use karte he
	while ($result=mysqli_fetch_assoc($data)) // tab tak data fetch/print karte jaa

    {                    // to print a table data 
    	//yaha pe jo name apne database ke columns ko diya he wo hi name braces me likhe
     echo "<tr>
           <td>".$result['roll_no']."</td>
           <td>".$result['first_name']."</td>      
           <td>".$result['last_name']."</td>
           <td>".$result['email']."</td>
           <td>".$result['password']."</td>
           <td>".$result['confirmpassword']."</td>
           </tr>";

    }
	
}

else

{
	echo "record not found";
}


?>