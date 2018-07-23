<?php

//including the database connection file
    include("config.php");
    //connect_db();
//getting id of the data from url
    $id = $_POST['id'];
	$head = $_POST['heading'];
	$text = $_POST['newsbody'];
	$time=date("Y-m-d h:i:sa");
	// summertext='$summertext'
	
	//echo $id."<br>";
	//echo $head."<br>";
	//echo $text."<br>";  
	//echo $time;
	
	
//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update test set heading='$head',summertext='$text',datetime='$time',edited='1' WHERE id='$id'");
	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:listdata.php");

?>

