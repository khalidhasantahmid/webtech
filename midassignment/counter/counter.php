<!DOCTYPE html>
<html>
	<head>
		<title>Counter</title>
		<style>
			th, td {padding: 5px; align: center;}
			hr {width:60%;}
			button {background:blue; color:white; border:0px; height:30px;}
		</style>
	</head>
		<body align="center">
			<hr>
				<h1>Character Frequency Count</h1>
			<hr>
			<?php

				$words=$_GET['words'];
				
				trim($words); 
				echo "".$words."</br>";
				echo strlen($words);
			?>
			<br>
			<table align="center" border="2" style="width:40%;border-collapse: collapse">
			
				<tr><td ><h4>Character</h4></td><td ><h4>Count</h4></td></tr>
				<?php

					$words = $_GET['words'];
					$words = preg_replace('/\s+/', ' ', trim($words)); 
					$c = array();					
					for($i = 0; $i < strlen($words); $i++)
					{
						$char = substr( $words, $i, 1 );
						$x = $char; $y = 0;
						$check = "false";
						
						for($j = 0; $j < count($c); $j++)
						{	
							if(isset( $c[$j]) )
							{
								if( $x == $c[$j])
									$check = "true";
							}
						}
						
						
						if($check == "false")
						{
							for($j = 0; $j < strlen($words); $j++)
							{
								$char = substr( $words, $j, 1 );
								if($char == $x)
								{
									$y++;
								}
							}
									$c[$i] = $x;
							echo '<tr><td >'.$x.'</td><td >'.$y."</td></tr>";
						}
					}
				?>
				<tr><td colspan="2"><a href="index.html"><button type="button" >Input Another String</button></a></td></tr>
				
			</table>
			
			<hr>
				<h1>Word Count</h1>
			<hr>
			<br>
			<table align="center" border="2" style="width:40%;border-collapse: collapse">
			
				<tr><td><h4>Word</h4></td><td><h4>Count</h4></td></tr>
				<?php

					$words=$_GET['words'];
					$w=str_word_count($words,1);
					$c=array();
					
					for($i=0;$i<count($w);$i++)
					{
						$x=$w[$i];$y=0;
						$check="false";
						
						for($j=0;$j<count($c);$j++)
						{	
							if(isset($c[$j]))
							{
								if($x==$c[$j])
									$check="true";
							}
						}
						
						
						if($check=="false")
						{
							for($j=0;$j<count($w);$j++)
							{
								$char = $w[$j];
								if($char == $x)
								{
									$y++;
								}
							}
							$c[$i]=$x;
							echo "<tr><td >".$x."</td><td >".$y."</td></tr>";
						}
					}
				?>
				<tr><td colspan="2"><a href="index.html"><button type="button" >Input Another String</button></a></td></tr>
				
			</table>
			
			
		</body>
</html>