<!DOCTYPE html>
<html>
<head>
	<title>sign up form</title>
	<style>
		table
		{
			font-family: sans-serif;
			color: white;
			border-radius: 10px;
		}
		.input
		{
		font-family: sans-serif;	
		border:none;
		border-radius: 2px;
		width: 200px;
		height: 25px;
		}
		#btn
		{
          background: blue;
          color: white;
          font-family: sans-serif;
          width: 100px;
          height: 25px;
          border:none;
          border-radius: 10px;
		}
         #h4
         {
          font-family: sans-serif;
          font-size: 15px;
          color: yellow;
         }

         #btn:focus
         {
         	background: green;
         	
         }
         #dropdown
         {
         	height: 28px;
         	border-radius: 5px;
         }
         .Mobile
         {
         	font-family: sans-serif;	
		border:none;
		border-radius: 2px;
		width: 150px;
		height: 25px;
         }
         .dob
         {
         	height: 28px;
         	border-radius: 5px;
		 }

	</style>
	
</head>
<body bgcolor="pink">
	<form><br>
	<br>
	<br>
	
		<table border="0" align="center" cellspacing="12" cellpadding="4" bgcolor="black">

		<div id="h4"><tr><td colspan="2"  align="center"><div id="h4"><h4>REGISTRATION FORM</h4></div></td></tr></div
		
		
		<tr>
			<td>First Name:
		<td><input type="text" name="first_name" value="" class="input" placeholder="First name" required></td></tr>

		<tr>
			<td>Last Name:
		<td><input type="text" name="Last_name" value=""  class="input"placeholder="Last name" required ></td></tr>

		<tr>
			<td>Mobile No.:
		<td><select id="dropdown">
			<option>+91</option>
			<option>+22</option>
		</select><input type="number" name="number" value=""  class="Mobile" placeholder="Mobile no" required ></td></tr>


		<tr><td>Email Address:
		<td><input type="text" name="Email" value="" class="input" placeholder="Email" required></td></tr>

		<tr>
			<td>Gender:
		<td><input type="radio" name="gender" value="p1"  class="" placeholder="Last name" required >Male
            <input type="radio" name="gender" value="p1"  class="" placeholder="Last name" required >Female</td></tr>

            <tr><td> Address:
		<td><textarea rows="2" cols="23" required></textarea>
		</td></tr>

		<td>Date of birth:
		<td><select class="dob">
			<option>DAY</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
		</select>
		<select class="dob">
			<option>MONTH</option>
			<option>jan</option>
			<option>feb</option>
			<option>mar</option>
			<option>apr</option>
			<option>may</option>
			<option>jun</option>
			<option>jly</option>
			<option>aug</option>
			<option>spt</option>
			<option>oct</option>
			<option>nov</option>
			<option>dec</option>
		</select>
		<select class="dob">
			<option>YEAR</option>
			<option>1000</option>
			<option>2000</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
		</select>
			
	</td></tr>

	         <tr><td>upload file
		<td><input type="file" name="file" value="" class="input" required></td></tr>


		<tr><td>Password:
		<td><input type="Password" name="Password" value="" class="input" placeholder="Password"required></td></tr>


		<tr><td>Confirm Password:
		<td><input type="Password" name="Confirm_password" value="" class="input" placeholder="Confirm Password"required></td></tr>

		<tr><td colspan="2"  align="center"><input type="submit" name="submit" value="submit" id="btn"></td></tr>
	

	</form>

</body>
</html>