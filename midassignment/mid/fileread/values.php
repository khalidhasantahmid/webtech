<?php
	$myfile = fopen("registrations/".$_GET['filename'], "r") or die("Unable to open file!");
	$i=0;

	
		while(!feof($myfile)) 
		{
			$cookie_name = preg_replace('/\s+/', '', trim(fgets($myfile))); 
			$cookie_value = fgets($myfile);
			
			setcookie(trim($cookie_name), $cookie_value, time()+ 10,'/');
			
			if(!isset($_COOKIE[$cookie_name]))
				{
					//echo "Cookie named '" . $cookie_name . "' is not set!";
				} 
				else 
				{
					//echo "Cookie '" . $cookie_name . "' is set!<br>";
					//echo "Value is: " . $_COOKIE[$cookie_name]."<br>";
				}
			
			//echo "".$_COOKIE["serial".$i]."<br>";
			
			//setcookie("serial".$i, "".fgets($myfile), time() - 360,'/');
			//$i++;
			//fgets($myfile);
			//echo fgets($myfile) . "<br>";
		}

	fclose($myfile);

?>

<!DOCTYPE html>
<html>
	<head>
		<style>
			select{width:80%;}
		</style>
		<title>Registration Final</title>
	</head>
		<body align="center">
			<form name="table" action="index.php">
				<table align="center" border="0" style="width:40%;border-collapse: collapse">
					<tr colspan="2">
						<td align="left">
							<h3> PASSPORT APPLICATION </h3>
							<?php
								echo '<h4 align="left" style="color:green;">Online application ID : '.$_COOKIE['id'].'</h4>';
								echo '<h5 style="color:green;"><i>Enrolment Date : '.$_COOKIE['currentdate'].'</i></h5>';
							?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Passport Application Information</h4>
						</td>
					</tr>
					<tr>
						<?php
								echo '<td align="left"><h6>Applying in :</h6></td><td align="left"><h6>'.$_COOKIE['applyin'].'</h6></td>';
						?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Passport Type :</h6></td><td align="left"><h6>'.$_COOKIE['passtype'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Delivery Type :</h6></td><td align="left"><h6>'.$_COOKIE['dtype'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Personal Information Summary</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Name of applicant :</h6></td><td align="left"><h6>'.$_COOKIE['applicantname'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>First Part [Given Name] :</h6></td><td align="left"><h6>'.$_COOKIE['firstname'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Second Part [Surname] :</h6></td><td align="left"><h6>'.$_COOKIE['surname'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Father Name :</h6></td><td align="left"><h6>'.$_COOKIE['fathername'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Father Nationality :</h6></td><td align="left"><h6>'.$_COOKIE['fathernationality'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Father Profession :</h6></td><td align="left"><h6>'.$_COOKIE['fatherprofession'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Mother Name :</h6></td><td align="left"><h6>'.$_COOKIE['mothername'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Mother Nationality :</h6></td><td align="left"><h6>'.$_COOKIE['mothernationality'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Mother Profession :</h6></td><td align="left"><h6>'.$_COOKIE['motherprofession'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Spouse Name :</h6></td><td align="left"><h6>'.$_COOKIE['spousename'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Spouse Nationality :</h6></td><td align="left"><h6>'.$_COOKIE['spousenationality'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Spouse Profession :</h6></td><td align="left"><h6>'.$_COOKIE['spouseprofession'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Marital Status :</h6></td><td align="left"><h6>'.$_COOKIE['marital'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Applicant Profession :</h6></td><td align="left"><h6>'.$_COOKIE['applicantprofession'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Country of Birth :</h6></td><td align="left"><h6>'.$_COOKIE['cob'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Birth District :</h6></td><td align="left"><h6>'.$_COOKIE['bd'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Date of Birth :</h6></td><td align="left"><h6>'.$_COOKIE['dob'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Gender :</h6></td><td align="left"><h6>'.$_COOKIE['gender'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Birth ID No :</h6></td><td align="left"><h6>'.$_COOKIE['bid'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>National ID No :</h6></td><td align="left"><h6>'.$_COOKIE['nid'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Tax ID No :</h6></td><td align="left"><h6>'.$_COOKIE['tid'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Height :</h6></td><td align="left"><h6>'.$_COOKIE['hcm'].' <h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Religion :</h6></td><td align="left"><h6>'.$_COOKIE['religion'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Email :</h6></td><td align="left"><h6>'.$_COOKIE['email'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Citizenship Information</h4>
						</td>
					</tr>
					<tr>
					<?php
							echo '<td align="left"><h6>Nationality :</h6></td><td align="left"><h6>'.$_COOKIE['nationality'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Citizenship Status :</h6></td><td align="left"><h6>'.$_COOKIE['citizenshipstatus'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Dual Citizenship :</h6></td><td align="left"><h6>'.$_COOKIE['dcitizenship'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Present Address</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Village :</h6></td><td align="left"><h6>'.$_COOKIE['village'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Road :</h6></td><td align="left"><h6>'.$_COOKIE['road'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_COOKIE['district'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_COOKIE['policestation'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_COOKIE['postoffice'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Permanent Address</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Village :</h6></td><td align="left"><h6>'.$_COOKIE['pvillage'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Road :</h6></td><td align="left"><h6>'.$_COOKIE['proad'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_COOKIE['pdistrict'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_COOKIE['ppolicestation'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_COOKIE['ppostoffice'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Applicant Contact Information</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Office No :</h6></td><td align="left"><h6>'.$_COOKIE['officeno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Residence No :</h6></td><td align="left"><h6>'.$_COOKIE['residenceno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Mobile No :</h6></td><td align="left"><h6>'.$_COOKIE['mobileno'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Emergency Contact Person's Details</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Name :</h6></td><td align="left"><h6>'.$_COOKIE['ename'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Country :</h6></td><td align="left"><h6>'.$_COOKIE['ecountry'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Village :</h6></td><td align="left"><h6>'.$_COOKIE['evillage'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Road :</h6></td><td align="left"><h6>'.$_COOKIE['eroad'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_COOKIE['edistrict'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_COOKIE['epolicestation'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_COOKIE['epostoffice'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Contact No :</h6></td><td align="left"><h6>'.$_COOKIE['econtactno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Email :</h6></td><td align="left"><h6>'.$_COOKIE['eemail'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Relationship :</h6></td><td align="left"><h6>'.$_COOKIE['erelation'].'</h6></td>';
					?>
					</tr>
					<tr align="left">
						<td colspan="2">
							<h4 align="left" style="color:green;"> Old Passport Information</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Passport No :</h6></td><td align="left"><h6>'.$_COOKIE['oldpassno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Place of Issue :</h6></td><td align="left"><h6>'.$_COOKIE['placeoi'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Date of Issue :</h6></td><td align="left"><h6>'.$_COOKIE['dateoi'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php 
						echo '<td align="left"><h6>Re-issue Reason :</h6></td><td align="left"><h6>'.$_COOKIE['rereason'].'</h6></td>';
					?>
					</tr>
					<tr align="left">
						<td colspan="2">
							<h4 align="left" style="color:green;"> Payment Information</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Payment Type :</h6></td><td align="left"><h6>'.$_COOKIE['ptype'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Amount :</h6></td><td align="left"><h6>'.$_COOKIE['currency'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Date of Payment :</h6></td><td align="left"><h6>'.$_COOKIE['dopayment'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Receipt No :</h6></td><td align="left"><h6>'.$_COOKIE['receiptno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php 
						echo '<td align="left"><h6>Name of Bank :</h6></td><td align="left"><h6>'.$_COOKIE['bankname'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Name of Branch :</h6></td><td align="left"><h6>'.$_COOKIE['bankbranch'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td align="right" colspan="2">
							<input type="submit" value="BACK"> 
						</td>	
					</tr>
					
				</table>
			</form>	
		</body>
</html>

