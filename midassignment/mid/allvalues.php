<?php
session_start(); //start the PHP_session function 
$file = fopen("fileread/registrations/".$_SESSION['id'].".txt", "w") or die("Unable to open file!");

$txt="id\n".$_SESSION['id']."\n";fwrite($file, $txt);
$txt="currentdate\n".$_SESSION['currentdate']."\n";fwrite($file, $txt);
$txt="applyin\n".$_SESSION['applyin']."\n";fwrite($file, $txt);
$txt="passtype\n".$_SESSION['passtype']."\n";fwrite($file, $txt);
$txt="dtype\n".$_SESSION['dtype']."\n";fwrite($file, $txt);
$txt="applicantname\n".$_SESSION['applicantname']."\n";fwrite($file, $txt);
$txt="firstname\n".$_SESSION['firstname']."\n";fwrite($file, $txt);
$txt="surname\n".$_SESSION['surname']."\n";fwrite($file, $txt);
$txt="fathername\n".$_SESSION['fathername']."\n";fwrite($file, $txt);
$txt="fathernationality\n".$_SESSION['fathernationality']."\n";fwrite($file, $txt);
$txt="fatherprofession\n".$_SESSION['fatherprofession']."\n";fwrite($file, $txt);
$txt="mothername\n".$_SESSION['mothername']."\n";fwrite($file, $txt);
$txt="mothernationality\n".$_SESSION['mothernationality']."\n";fwrite($file, $txt);
$txt="motherprofession\n".$_SESSION['motherprofession']."\n";fwrite($file, $txt);
$txt="spousename\n".$_SESSION['spousename']."\n";fwrite($file, $txt);
$txt="spousenationality\n".$_SESSION['spousenationality']."\n";fwrite($file, $txt);
$txt="spouseprofession\n".$_SESSION['spouseprofession']."\n";fwrite($file, $txt);
$txt="marital\n".$_SESSION['marital']."\n";fwrite($file, $txt);
$txt="applicantprofession\n".$_SESSION['applicantprofession']."\n";fwrite($file, $txt);
$txt="cob\n".$_SESSION['cob']."\n";fwrite($file, $txt);
$txt="bd\n".$_SESSION['bd']."\n";fwrite($file, $txt);
$txt="dob\n".$_SESSION['dob']."\n";fwrite($file, $txt);
$txt="gender\n".$_SESSION['gender']."\n";fwrite($file, $txt);
$txt="bid\n".$_SESSION['bid']."\n";fwrite($file, $txt);
$txt="nid\n".$_SESSION['nid']."\n";fwrite($file, $txt);
$txt="tid\n".$_SESSION['tid']."\n"; fwrite($file, $txt);
$txt="hcm\n".$_SESSION['hcm']." cm ". $_SESSION['hinch']." inch"."\n";fwrite($file, $txt);
$txt="religion\n".$_SESSION['religion']."\n";fwrite($file, $txt);
$txt="email\n".$_SESSION['email']."\n";fwrite($file, $txt);
$txt="nationality\n".$_SESSION['nationality']."\n";fwrite($file, $txt);
$txt="citizenshipstatus\n".$_SESSION['citizenshipstatus']."\n";fwrite($file, $txt);
$txt="dcitizenship\n".$_SESSION['dcitizenship']."\n";fwrite($file, $txt);
$txt="village\n".$_SESSION['village']."\n";fwrite($file, $txt);
$txt="road\n".$_SESSION['road']."\n";fwrite($file, $txt);
$txt="district\n".$_SESSION['district']."\n";fwrite($file, $txt);
$txt="policestation\n".$_SESSION['policestation']."\n";fwrite($file, $txt);
$txt="postoffice\n".$_SESSION['postoffice']."\n";fwrite($file, $txt);
$txt="pvillage\n".$_SESSION['pvillage']."\n";fwrite($file, $txt);
$txt="proad\n".$_SESSION['proad']."\n";fwrite($file, $txt);
$txt="pdistrict\n".$_SESSION['pdistrict']."\n";fwrite($file, $txt);
$txt="ppolicestation\n".$_SESSION['ppolicestation']."\n";fwrite($file, $txt);
$txt="ppostoffice\n".$_SESSION['ppostoffice']."\n";fwrite($file, $txt);
$txt="officeno\n".$_SESSION['officeno']."\n";fwrite($file, $txt);
$txt="residenceno\n".$_SESSION['residenceno']."\n";fwrite($file, $txt);
$txt="mobileno\n".$_SESSION['mobileno']."\n";fwrite($file, $txt);
$txt="ename\n".$_SESSION['ename']."\n";fwrite($file, $txt);
$txt="ecountry\n".$_SESSION['ecountry']."\n";fwrite($file, $txt);
$txt="evillage\n".$_SESSION['evillage']."\n";fwrite($file, $txt);
$txt="eroad\n".$_SESSION['eroad']."\n";fwrite($file, $txt);
$txt="edistrict\n".$_SESSION['edistrict']."\n";fwrite($file, $txt);
$txt="epolicestation\n".$_SESSION['epolicestation']."\n";fwrite($file, $txt);
$txt="epostoffice\n".$_SESSION['epostoffice']."\n";fwrite($file, $txt);
$txt="econtactno\n".$_SESSION['econtactno']."\n";fwrite($file, $txt);
$txt="eemail\n".$_SESSION['eemail']."\n";fwrite($file, $txt);
$txt="erelation\n".$_SESSION['erelation']."\n";fwrite($file, $txt);
$txt="oldpassno\n".$_SESSION['oldpassno']."\n";fwrite($file, $txt);
$txt="placeoi\n".$_SESSION['placeoi']."\n";fwrite($file, $txt);
$txt="dateoi\n".$_SESSION['dateoi']."\n";fwrite($file, $txt);
$txt="rereason\n".$_SESSION['rereason']."\n";fwrite($file, $txt);
$txt="ptype\n".$_SESSION['ptype']."\n";fwrite($file, $txt);
$txt="currency\n".$_SESSION['currency']." amount : ".$_SESSION['currencyamount']."\n";fwrite($file, $txt);
$txt="dopayment\n".$_SESSION['dopayment']."\n";fwrite($file, $txt);
$txt="receiptno\n".$_SESSION['receiptno']."\n";fwrite($file, $txt);
$txt="bankname\n".$_SESSION['bankname']."\n";fwrite($file, $txt);
$txt="bankbranch\n".$_SESSION['bankbranch']."\n";fwrite($file, $txt);



fclose($file);

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
			<form name="table" action="logout.php">
				<table align="center" border="0" style="width:60%;border-collapse: collapse">
					<tr colspan="2">
						<td align="left">
							<h3> PASSPORT APPLICATION </h3>
							<?php
								echo '<h4 align="left" style="color:green;">Online application ID : '.$_SESSION['id'].'</h4>';
								echo '<h5 style="color:green;"><i>Enrolment Date : '.$_SESSION['currentdate'].'</i></h5>';
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
								echo '<td align="left"><h6>Applying in :</h6></td><td align="left"><h6>'.$_SESSION['applyin'].'</h6></td>';
						?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Passport Type :</h6></td><td align="left"><h6>'.$_SESSION['passtype'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Delivery Type :</h6></td><td align="left"><h6>'.$_SESSION['dtype'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Personal Information Summary</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Name of applicant :</h6></td><td align="left"><h6>'.$_SESSION['applicantname'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>First Part [Given Name] :</h6></td><td align="left"><h6>'.$_SESSION['firstname'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Second Part [Surname] :</h6></td><td align="left"><h6>'.$_SESSION['surname'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Father Name :</h6></td><td align="left"><h6>'.$_SESSION['fathername'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Father Nationality :</h6></td><td align="left"><h6>'.$_SESSION['fathernationality'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Father Profession :</h6></td><td align="left"><h6>'.$_SESSION['fatherprofession'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Mother Name :</h6></td><td align="left"><h6>'.$_SESSION['mothername'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Mother Nationality :</h6></td><td align="left"><h6>'.$_SESSION['mothernationality'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Mother Profession :</h6></td><td align="left"><h6>'.$_SESSION['motherprofession'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Spouse Name :</h6></td><td align="left"><h6>'.$_SESSION['spousename'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Spouse Nationality :</h6></td><td align="left"><h6>'.$_SESSION['spousenationality'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Spouse Profession :</h6></td><td align="left"><h6>'.$_SESSION['spouseprofession'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Marital Status :</h6></td><td align="left"><h6>'.$_SESSION['marital'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Applicant Profession :</h6></td><td align="left"><h6>'.$_SESSION['applicantprofession'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Country of Birth :</h6></td><td align="left"><h6>'.$_SESSION['cob'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Birth District :</h6></td><td align="left"><h6>'.$_SESSION['bd'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Date of Birth :</h6></td><td align="left"><h6>'.$_SESSION['dob'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Gender :</h6></td><td align="left"><h6>'.$_SESSION['gender'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Birth ID No :</h6></td><td align="left"><h6>'.$_SESSION['bid'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>National ID No :</h6></td><td align="left"><h6>'.$_SESSION['nid'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Tax ID No :</h6></td><td align="left"><h6>'.$_SESSION['tid'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Height :</h6></td><td align="left"><h6>'.$_SESSION['hcm'].' cm'.$_SESSION['hinch'].'  inch<h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Religion :</h6></td><td align="left"><h6>'.$_SESSION['religion'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Email :</h6></td><td align="left"><h6>'.$_SESSION['email'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Citizenship Information</h4>
						</td>
					</tr>
					<tr>
					<?php
							echo '<td align="left"><h6>Nationality :</h6></td><td align="left"><h6>'.$_SESSION['nationality'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Citizenship Status :</h6></td><td align="left"><h6>'.$_SESSION['citizenshipstatus'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Dual Citizenship :</h6></td><td align="left"><h6>'.$_SESSION['dcitizenship'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Present Address</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Village :</h6></td><td align="left"><h6>'.$_SESSION['village'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Road :</h6></td><td align="left"><h6>'.$_SESSION['road'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_SESSION['district'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_SESSION['policestation'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_SESSION['postoffice'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Permanent Address</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Village :</h6></td><td align="left"><h6>'.$_SESSION['pvillage'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Road :</h6></td><td align="left"><h6>'.$_SESSION['proad'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_SESSION['pdistrict'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_SESSION['ppolicestation'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_SESSION['ppostoffice'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Applicant Contact Information</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Office No :</h6></td><td align="left"><h6>'.$_SESSION['officeno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Residence No :</h6></td><td align="left"><h6>'.$_SESSION['residenceno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Mobile No :</h6></td><td align="left"><h6>'.$_SESSION['mobileno'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td colspan="2">
							<h4 align="left" style="color:green;"> Emergency Contact Person's Details</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Name :</h6></td><td align="left"><h6>'.$_SESSION['ename'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Country :</h6></td><td align="left"><h6>'.$_SESSION['ecountry'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Village :</h6></td><td align="left"><h6>'.$_SESSION['evillage'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Road :</h6></td><td align="left"><h6>'.$_SESSION['eroad'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_SESSION['edistrict'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_SESSION['epolicestation'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_SESSION['epostoffice'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Contact No :</h6></td><td align="left"><h6>'.$_SESSION['econtactno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Email :</h6></td><td align="left"><h6>'.$_SESSION['eemail'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Relationship :</h6></td><td align="left"><h6>'.$_SESSION['erelation'].'</h6></td>';
					?>
					</tr>
					<tr align="left">
						<td colspan="2">
							<h4 align="left" style="color:green;"> Old Passport Information</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Passport No :</h6></td><td align="left"><h6>'.$_SESSION['oldpassno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Place of Issue :</h6></td><td align="left"><h6>'.$_SESSION['placeoi'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Date of Issue :</h6></td><td align="left"><h6>'.$_SESSION['dateoi'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php 
						echo '<td align="left"><h6>Re-issue Reason :</h6></td><td align="left"><h6>'.$_SESSION['rereason'].'</h6></td>';
					?>
					</tr>
					<tr align="left">
						<td colspan="2">
							<h4 align="left" style="color:green;"> Payment Information</h4>
						</td>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Payment Type :</h6></td><td align="left"><h6>'.$_SESSION['ptype'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Amount :</h6></td><td align="left"><h6>'.$_SESSION['currency'].' '.$_SESSION['currencyamount'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Date of Payment :</h6></td><td align="left"><h6>'.$_SESSION['dopayment'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Receipt No :</h6></td><td align="left"><h6>'.$_SESSION['receiptno'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php 
						echo '<td align="left"><h6>Name of Bank :</h6></td><td align="left"><h6>'.$_SESSION['bankname'].'</h6></td>';
					?>
					</tr>
					<tr>
					<?php
						echo '<td align="left"><h6>Name of Branch :</h6></td><td align="left"><h6>'.$_SESSION['bankbranch'].'</h6></td>';
					?>
					</tr>
					<tr>
						<td align="right" colspan="2">
							<input type="submit" value="Save & NEXT"> 
						</td>	
					</tr>
					
				</table>
			</form>	
		</body>
</html>