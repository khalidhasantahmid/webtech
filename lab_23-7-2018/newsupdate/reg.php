<!DOCTYPE HTML>

<html>
	<head>
		<title>Registration form</title>
	</head>
	
	<body>
		
		<form method="post" action="reguser.php">
		
			<table>
			  <tr>
				<td colspan="2" align="center"><h2>Registration Form</h2></td>
			  </tr>
			  <tr>
				<td>Fullname : </td><td><input type="text" name="fullname"></td>				  
			  </tr>
			  <tr>
				<td>Email :</td><td><input type="text" name="txtemail"></td>
			  </tr>
			  <tr>
				  <td>Gender : </td>
				  <td>
					  <input type="radio" name="gender" value="male" checked> Male
					  <input type="radio" name="gender" value="female"> Female
					  <input type="radio" name="gender" value="other"> Other
				  </td>
			  </tr>
			  <tr>
				<td>Date of Birth :</td><td><input type="date" name="dob"></td>
			  </tr>
			  <tr>
				<td>Password :</td><td><input type="text" name="pass"></td>
			  </tr>
			  <tr>
				<td>Confirm Password :</td><td><input type="text" name="cpass"></td>
			  </tr>
			  <tr>
				  <td align="center"><input type="reset" value="Cancel"></td>
				  <td align="center"><input type="submit" value="Submit"></td>
			  </tr>	
				<tr><td colspan="2"><a href="login.php">Sign in</a></td>
		  </table>
		  
		</form> 
	</body>
</html>