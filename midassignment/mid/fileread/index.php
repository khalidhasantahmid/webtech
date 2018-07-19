<!DOCTYPE html>
<html>
	<head>
		<style>
			th, td {padding: 5px;}
			</style>
		<title>File Menu</title>
	</head>
		<body align="center">
			<form name="table" action="values.php" meyhod="get">
				<table align="center" border="0" style="width:60%;border-collapse: collapse">
					<tr colspan="2">
						<td align="left">
							<h1> PASSPORT APPLICATION </h1>
							<h3 style="color:green;"><i>Registration Files</i></h3>
						</td>
					</tr>
					
					<?php
						$resource=opendir("registrations");
						while(($files =readdir($resource))!= FALSE)
						{
							if($files != '.' && $files != '..')
							{
								echo '<tr><td align="left"><input type="radio" name="filename" value="'.$files.'">'.$files.'</td></tr>';
							}
						}
					?>
					
					<tr><td align="left"><input type="submit" value="Show Full Form"></td></tr>
					
				</table>
			</form>	
		</body>
</html>

