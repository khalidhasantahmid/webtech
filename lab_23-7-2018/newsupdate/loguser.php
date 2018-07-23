<?php
session_start(); //start the PHP_session function 

include("config.php");

    $email = $_POST['email'];
	$pass = $_POST['pass'];
	
	$statement="select * from userlog where email='$email'";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
					if($row['pass']==$pass)
					{
						$_SESSION['email']=$email;
						continue;
					}
                }
            }
            else
            {
                echo "wrong email or password";
            }
            mysqli_close($conn);
			
	if(!isset($_SESSION['email'])){
		header("location:login.php");
	}
	else{
		header("location:viewdata.php");
	}
			

?>