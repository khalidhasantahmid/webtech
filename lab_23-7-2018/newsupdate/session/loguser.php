<?php
session_start(); //start the PHP_session function 

$un="saef";
$pw="pass";

if($_POST['un']==$un && $_POST['pw']==$pw){
	$_SESSION['un']=$un;
	header("location:home.php");
	
}
else{
	echo "wrong username or password";
}

?>