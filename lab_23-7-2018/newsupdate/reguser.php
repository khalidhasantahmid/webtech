<?php
/**
 * Created by PhpStorm.
 * User: mdsae
 * Date: 11-Jun-18
 * Time: 9:37 PM
 */
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		if($pass == $cpass)
		{
			require 'config.php';
			$email=$_POST['txtemail'];
			$fullname=$_POST['fullname'];
			$statement="insert into userlog(pass,email,fullname) values ('$pass','$email','$fullname')";

			if(mysqli_query($conn,$statement))
			{
				header('location:reg.php');
			}
			else
				mysqli_error($conn);

			mysqli_close($conn);
		}
		else
		{
			header('location:reg.php');
		}
 
?>
