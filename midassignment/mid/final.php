<?php
session_start(); //start the PHP_session function 

$_SESSION['skippayment']=$_POST['skippayment'];
$_SESSION['currentdate']=date("d/m/y");
$_SESSION['check']="true";

if($_SESSION['skippayment']=="true")
{
	$_SESSION['ptype']="";
	$_SESSION['currency']="";
	$_SESSION['currencyamount']="DUE";
	$_SESSION['dopayment']="DUE";
	$_SESSION['receiptno']="DUE";
	$_SESSION['bankname']="";
	$_SESSION['bankbranch']="";	
}
else
{
	$_SESSION['ptype']=$_POST['ptype'];
	$_SESSION['currency']=$_POST['currency'];
	$_SESSION['currencyamount']=$_POST['currencyamount'];
	$_SESSION['dopayment']=$_POST['dopayment'];
	$_SESSION['receiptno']=$_POST['receiptno'];
	$_SESSION['bankname']=$_POST['bankname'];
	$_SESSION['bankbranch']=$_POST['bankbranch'];	
}
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
			<form name="final" action="allvalues.php" method="post">
				<table align="center" border="0" style="width:60%;border-collapse: collapse">
					<tr colspan="2">
						<td align="left">
							<h3> PASSPORT APPLICATION - REVIEW ENROLMENT SUMMARY</h3>
							<?php
								echo '<h4 align="left" style="color:green;">Online application ID : '.$_SESSION['id'].'</h4>';
								echo '<h5 style="color:green;"><i>Enrolment Date : '.$_SESSION['currentdate'].'</i></h5>';
							?>
							<h5 style="color:red;"><i>Reminder before submitting your application</i></h5>
							<h5>
								<ul>
									<li>After you click submit, you are not allowed to modify your information.</li>
									<li>Plaease visit <b>BAGERHAT Branch</b> on any working day within the next 15 days for biometric capture except government holiday.</li>
								</ul>
							</h5>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<table align="center" border="1" style="width:100%;border-collapse: collapse">
								<tr>
									<td>
										<table align="center" style="width:100%;border-collapse: collapse">
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
												if($_SESSION['passtype']=="select")
												{
													echo '<td align="left"><h6>Applying in :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Passport Type :</h6></td><td align="left"><h6>'.$_SESSION['passtype'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Personal Information Summary</h4>
												</td>
											</tr>
											<tr>
											<?php
												if($_SESSION['applicantname']=="")
												{
													echo '<td align="left"><h6>Name of applicant :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Name of applicant :</h6></td><td align="left"><h6>'.$_SESSION['applicantname'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												echo '<td align="left"><h6>First Part [Given Name] :</h6></td><td align="left"><h6>'.$_SESSION['firstname'].'</h6></td>';
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['surname']=="")
												{
													echo '<td align="left"><h6>Second Part [Surname] :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Second Part [Surname] :</h6></td><td align="left"><h6>'.$_SESSION['surname'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['fathername']=="")
												{
													echo '<td align="left"><h6>Father Name :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Father Name :</h6></td><td align="left"><h6>'.$_SESSION['fathername'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												echo '<td align="left"><h6>Father Nationality :</h6></td><td align="left"><h6>'.$_SESSION['fathernationality'].'</h6></td>';
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['fatherprofession']=="select")
												{
													echo '<td align="left"><h6>Father Profession :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Father Profession :</h6></td><td align="left"><h6>'.$_SESSION['fatherprofession'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['mothername']=="")
												{
													echo '<td align="left"><h6>Mother Name :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Mother Name :</h6></td><td align="left"><h6>'.$_SESSION['mothername'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												echo '<td align="left"><h6>Mother Nationality :</h6></td><td align="left"><h6>'.$_SESSION['mothernationality'].'</h6></td>';
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['motherprofession']=="select")
												{
													echo '<td align="left"><h6>Mother Profession :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Mother Profession :</h6></td><td align="left"><h6>'.$_SESSION['motherprofession'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												echo '<td align="left"><h6>Spouse Name :</h6></td><td align="left"><h6>'.$_SESSION['spousename'].'</h6></td>';
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['marital']=="select")
												{
													echo '<td align="left"><h6>Marital Status :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Marital Status :</h6></td><td align="left"><h6>'.$_SESSION['marital'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['applicantprofession']=="select")
												{
													echo '<td align="left"><h6>Applicant Profession :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Applicant Profession :</h6></td><td align="left"><h6>'.$_SESSION['applicantprofession'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												echo '<td align="left"><h6>Country of Birth :</h6></td><td align="left"><h6>'.$_SESSION['cob'].'</h6></td>';
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['bd']=="select")
												{
													echo '<td align="left"><h6>Birth District :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Birth District :</h6></td><td align="left"><h6>'.$_SESSION['bd'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['dob']=="")
												{
													echo '<td align="left"><h6>Date of Birth :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Date of Birth :</h6></td><td align="left"><h6>'.$_SESSION['dob'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['gender']=="")
												{
													echo '<td align="left"><h6>Gender :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Gender :</h6></td><td align="left"><h6>'.$_SESSION['gender'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['bid']=="")
												{
													echo '<td align="left"><h6>Birth ID No :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Birth ID No :</h6></td><td align="left"><h6>'.$_SESSION['bid'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['hcm']==""||$_SESSION['hinch']=="")
												{
													echo '<td align="left"><h6>Height :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Height :</h6></td><td align="left"><h6>'.$_SESSION['hcm'].' cm'.$_SESSION['hinch'].'  inch<h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['religion']=="select")
												{
													echo '<td align="left"><h6>Religion :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Religion :</h6></td><td align="left"><h6>'.$_SESSION['religion'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['email']=="")
												{
													echo '<td align="left"><h6>Email :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Email :</h6></td><td align="left"><h6>'.$_SESSION['email'].'</h6></td>';
												}
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
										</table>
									</td>
									<td>
										<table align="center" style="width:100%;border-collapse: collapse">
											<tr>
											<?php
												if($_SESSION['dcitizenship']=="")
												{
													echo '<td align="left"><h6>Dual Citizenship :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Dual Citizenship :</h6></td><td align="left"><h6>'.$_SESSION['dcitizenship'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Present Address</h4>
												</td>
											</tr>
											<tr>
											<?php
												if($_SESSION['district']=="select")
												{
													echo '<td align="left"><h6>District :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_SESSION['district'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['policestation']=="select")
												{
													echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_SESSION['policestation'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['postoffice']=="select")
												{
													echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_SESSION['postoffice'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Permanent Address</h4>
												</td>
											</tr>
											<tr>
											<?php
												if($_SESSION['pdistrict']=="select")
												{
													echo '<td align="left"><h6>District :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_SESSION['pdistrict'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['ppolicestation']=="select")
												{
													echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_SESSION['ppolicestation'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['ppostoffice']=="select")
												{
													echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="index.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_SESSION['ppostoffice'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Applicant Contact Information</h4>
												</td>
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
												if($_SESSION['ename']=="")
												{
													echo '<td align="left"><h6>Name :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page2.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Name :</h6></td><td align="left"><h6>'.$_SESSION['ename'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												echo '<td align="left"><h6>Country :</h6></td><td align="left"><h6>'.$_SESSION['ecountry'].'</h6></td>';
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['edistrict']=="select")
												{
													echo '<td align="left"><h6>District :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page2.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>District :</h6></td><td align="left"><h6>'.$_SESSION['edistrict'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['epolicestation']=="select")
												{
													echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page2.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Police Station :</h6></td><td align="left"><h6>'.$_SESSION['epolicestation'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['epostoffice']=="select")
												{
													echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page2.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Post Office :</h6></td><td align="left"><h6>'.$_SESSION['epostoffice'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['econtactno']=="")
												{
													echo '<td align="left"><h6>Contact No :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page2.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Contact No :</h6></td><td align="left"><h6>'.$_SESSION['econtactno'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['erelation']=="select")
												{
													echo '<td align="left"><h6>Relationship :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page2.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Relationship :</h6></td><td align="left"><h6>'.$_SESSION['erelation'].'</h6></td>';
												}
											?>
											</tr>
											<tr align="left">
												<td colspan="2">
													<h4 align="left" style="color:green;"> Payment Information</h4>
												</td>
											</tr>
											<tr>
											<?php
												
												if($_SESSION['currencyamount']=="")
												{
													echo '<td align="left"><h6>Amount :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page3.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Amount :</h6></td><td align="left"><h6>'.$_SESSION['currency'].' '.$_SESSION['currencyamount'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['dopayment']=="")
												{
													echo '<td align="left"><h6>Date of Payment :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page3.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Date of Payment :</h6></td><td align="left"><h6>'.$_SESSION['dopayment'].'</h6></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if($_SESSION['receiptno']=="")
												{
													echo '<td align="left"><h6>Receipt No :</h6></td><td align="left"><h6><i style="color:red;">No value</i><a href="page3.php">click here</a></h6></td>';
													$_SESSION['check']="false";
												}
												else
												{
													echo '<td align="left"><h6>Receipt No :</h6></td><td align="left"><h6>'.$_SESSION['receiptno'].'</h6></td>';
												}
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
										</table>
									</td>
								</tr>
								<tr>
									<td align="right" colspan="2">
										<a href="page3.php"><button type="button">PREVIOUS PAGE</button></a>
										<?php
											if($_SESSION['check']=="true")
											{
												echo '<input type="submit" value="Save & NEXT"> ';
											}
											else
											{
												echo '<input type="submit" value="Save & NEXT" disabled> ';
											}
												
										?>
										
									</td>
								</tr>
								
							</table>
						</td>
					</tr>
					
				</table>
			</form>	
		</body>
</html>