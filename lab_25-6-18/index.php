
<html>
	<head>
		<title>Login form</title>
	</head>
	
	<body>
		
		<form action="loguser.php" method="post">
		
			<table>
			  <tr>
				<td colspan="2" align="center"><h2>Log In Form</h2></td>
			  </tr>
			  <tr>
				<td>Username/Email : </td><td><input type="text" name="uname"></td>				  
			  </tr>
			  <tr>
				<td>Password :</td><td><input type="text" name="pass"></td>
			  </tr>
			  <tr>
				  <td align="center"><input type="reset" value="Cancel"></td>
				  <td align="center"><input type="submit" value="Submit"></td>
			  </tr>					
			  <tr><td colspan="2">OR,</td>
			  <tr>
				  <td align="center"><input type="image" src="fb.png" alt="Submit" width="150" height="35"></td>
				  <td align="center"><input type="image" src="g.png" alt="Submit" width="150" height="35"></td>
			  </tr>
			  <tr>
				  <td colspan="2">
				  
					  <?php
						session_start();
						session_destroy(); //destroy entire session 
						header("location:log.html");
					  ?>
				  
				  </td>
			  </tr>
		  </table>
		  
		</form> 
	</body>
</html>