<?php
session_start(); //start the PHP_session function
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Site</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="summernote.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="summernote.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">News Site</a>
        </div>
        <ul class="nav navbar-nav">
            <?php
		if(!isset($_SESSION['email']))
		{
            header('location:login.php');

		}
		else
		{
			echo '<li class="active"><a href="home.php">Insert Data</a></li>';
            echo '<li><a href="viewdata.php">View data</a></li>';
            echo '<li><a href="listdata.php">List Data</a></li>';
			echo '<li style="color:red">'.$_SESSION['email'].'</li>';
			echo '<li><a href="logout.php">Log Out</a></li>';
		}
		?>
        </ul>
    </div>
</nav>
<div class="container">
   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
    <form name="summernote" method="post" action="setdata.php">
		News Headline:<br/><input type="text" class="form-control" name="heading"/><br/>
        News Body:<br/><textarea name="newsbody" id="summernote" class="summernote"></textarea><br/>
        <input type="submit" class="btn btn-success" value="Save News"/>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
</body>
</html>