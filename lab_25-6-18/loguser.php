<?php
session_start(); //start the PHP_session function 

$uname=array("user1","user2","user3","user4","user5");
$pass=array("1","2","3","4","5");
$flag=false;

for($i=0;$i<5;$i++)
{
	if($_POST['uname']==$uname[$i])
	{
		if($_POST['pass']==$pass[$i])
		{
			$_SESSION['uname']=$uname[$i];
			header("location:home.php");
			$flag=true;
		}
		
	}
}
	if($flag==false)
	{
		$_SESSION['status']="false";
			header("location:loggg.php");
	}

?>