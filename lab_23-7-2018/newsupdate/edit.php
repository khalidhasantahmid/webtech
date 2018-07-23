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
            <li class="active"><a href="home.php">Insert Data</a></li>
            <li><a href="viewdata.php">view Data</a></li>
            <li><a href="listdata.php">List Data</a></li>
            <li><a href="#">category 3</a></li>
        </ul>
    </div>
</nav>
<div class="container">
   <!-- <center><h1> <span class="label label-default">Summernote data formatter</span></h1></center>-->
    <form name="summernote" method="post" action="update.php">
	
	<?php
		$id = $_GET['id'];
		echo'<input type="hidden" id="id" name="id" value="'.$id.'">';
		require 'config.php';

            $statement="select * from test where id='$id'";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    //echo "<div class='panel-group'><div class='panel panel-primary'><div class='jumbotron'><h2>".$row['heading']."</h2> -By Admin at " .$row['datetime']."</div><div class='panel-body'>".$row['summertext'] ."</div></div></div>";
					
					echo 'News Headline:<br/><input type="text" class="form-control" name="heading" value="'.$row['heading'].'"/><br/>';
					echo 'News Body:<br/><textarea name="newsbody" id="summernote" class="summernote" value="<div class="anyipsum-output">'.$row['summertext'].'"></textarea><br/>';
				}
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
	?>
	
	
		
        <input type="submit" class="btn btn-success" value="Update" />
    </form>
</div>
<script>
    $(document).ready(function() 
	{
        $('#summernote').summernote();
    });
</script>
</body>
</html>