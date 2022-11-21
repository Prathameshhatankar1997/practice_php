
<?php
include("connection1.php");
error_reporting();


// <!-- <!DOCTYPE html>
// <html>
// <head>
// 	<title>fetch data</title>
// </head>
// <body>
// <table border="2">
// 	<tr>
// 		<th>roll_no</th>
// 		<th>first_name</th>
// 		<th>last_name</th>
// 		<th>email</th>
// 		<th>Password</th>
// 		<th>Confirm password</th>
// 	</tr>	
	
// </table>

// </body> 
// </html>
//  -->
echo "<br>";

$query="SELECT * FROM students";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);

echo $result['roll_no']." ".$result['first_name']." ".$result['last_name']." ".$result['email']." ".$result['password']." ".$result['confirmpassword'];


?>
