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
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
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
			echo '<li><a href="home.php">Insert Data</a></li>';
            echo '<li><a href="viewdata.php">View data</a></li>';
            echo '<li class="active"><a href="listdata.php">List Data</a></li>';
			echo '<li><h5 style="color:red">'.$_SESSION['email'].'</h5></li>';
			echo '<li><a href="logout.php">Log Out</a></li>';
		}
		?>
        </ul>
    </div>
</nav>
<div class="container">
<h3><a href='convertxml.php' style='float:right;' class='btn btn-info'>Export as Xml</a></h3><br/><br/>
	<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>News ID</th>
        <th>Headline</th>
        <th>Posting Date and Time</th>
        <th>Action</th>
		</tr>
        <?php
            require 'config.php';

            $statement="select * from test order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
					if($row['hide'] == 1)
						continue;
					
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['heading']."</td>";
					echo "<td>".$row['datetime']."</td>";
					echo "<td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"singleview.php?id=$row[id]\">View</a></td>";
					echo "</tr>";
                }
			
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
		</table>
</div>
</body>
</html>