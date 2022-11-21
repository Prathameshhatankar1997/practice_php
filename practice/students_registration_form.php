<!DOCTYPE html>
<html>
<head>
	<title>students registration form</title>
	<style type="text/css">
		.input
		{
          font-family: sans-serif;
          width: 200px;
          height: 25px;
          background-color: yellow;
          border-radius: 10px;
          border:none;
		}
		#heading
		{
			font-family: sans-serif;
			text-align: center;
		}
		table
	
		{
			font-family: sans-serif;
			color: white;
			border-radius: 10px;
			background: gray;
		}
		#btn
		{
          background: blue;
          color: white;
          font-family: sans-serif;
          width: 100px;
          height: 40px;
          border:none;
          border-radius: 10px;
          border-color: none;
		}
		#btn:hover
		{
			background: orange;
		}
		#btn:focus
		{
		   border-color: orange;
			width: 110px;
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
	<center>
	<table border="0" cellspacing="10" cellpadding="5">
		<tr>
			<div id="heading"><td colspan="2" align="center"><h1>Registration Form</h1></td></div>
		</tr>
		<tr>
			<td>Roll No</td>
			<td><input type="text" name="rollno" placeholder="Enter rollno" class="input" required></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstname" placeholder="Enter firstname" class="input"required></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastname" placeholder="Enter lastname" class="input" required></td>
		</tr>
		<tr>
			<td>Email ID</td>
			<td><input type="text" name="email" placeholder="Enter Email id" class="input"required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="Password" placeholder="Password" class="input" value="" required></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="Password" name="Confirm_password" placeholder="Confirm password" class="input" value="" required></td>
		</tr>
		<tr>
			
			<td colspan="2" align="center"><input type="submit" name="submit details" value="submit details" placeholder="Enter again Password" required id="btn"></td>
		</tr>
	</table>
</center>
</form>
</body>
</html>>