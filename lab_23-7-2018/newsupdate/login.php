<!DOCTYPE HTML>

<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
		
		<form method="post" action="loguser.php">
		
			<table>
			  <tr>
				<td colspan="2" align="center"><h2>Log In Form</h2></td>
			  </tr>
			  <tr>
				<td>Username/Email : </td><td><input type="text" name="email"></td>				  
			  </tr>
			  <tr>
				<td>Password :</td><td><input type="text" name="pass"></td>
			  </tr>
			  <tr>
				  <td align="center"><input type="reset" value="Cancel"></td>
				  <td align="center"><input type="submit" value="Submit"></td>
			  </tr>					
			  <tr><td colspan="2"><a href="reguser.php">Sign Up</a></td>
		  </table>
		  
		</form> 
	</body>
</html>