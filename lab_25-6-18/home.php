<?php

	session_start();
	if(!isset($_SESSION['uname'])){
		header("location:loggg.php");
	}
	else{
		echo "hello ".$_SESSION['uname'];
		echo "<br/><a href='logout.php'>Logout</a>";
	}
	
	?>