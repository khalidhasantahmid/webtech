<?php
session_start(); //start the PHP_session function 

$_SESSION['p2visited']="false";

if($_SESSION['p1visited']=="false")
{
	$_SESSION['p1visited']="true";
	$_SESSION['applyin']=$_POST['applyin'];
	$_SESSION['passtype']=$_POST['passtype'];
	$_SESSION['dtype']=$_POST['dtype'];
	$_SESSION['applicantname']=$_POST['applicantname'];
	$_SESSION['firstname']=$_POST['firstname'];
	$_SESSION['surname']=$_POST['surname'];
	$_SESSION['fathername']=$_POST['fathername'];
	$_SESSION['fathernationality']=$_POST['fathernationality'];
	$_SESSION['fatherprofession']=$_POST['fatherprofession'];
	$_SESSION['mothername']=$_POST['mothername'];
	$_SESSION['mothernationality']=$_POST['mothernationality'];
	$_SESSION['motherprofession']=$_POST['motherprofession'];
	$_SESSION['spousename']=$_POST['spousename'];
	$_SESSION['spousenationality']=$_POST['spousenationality'];
	$_SESSION['spouseprofession']=$_POST['spouseprofession'];
	$_SESSION['marital']=$_POST['marital'];
	$_SESSION['applicantprofession']=$_POST['applicantprofession'];
	$_SESSION['cob']=$_POST['cob'];
	$_SESSION['bd']=$_POST['bd'];
	$_SESSION['dob']=$_POST['dob'];
	$_SESSION['gender']=$_POST['gender'];
	$_SESSION['bid']=$_POST['bid'];
	$_SESSION['nid']=$_POST['nid'];
	$_SESSION['tid']=$_POST['tid'];
	$_SESSION['hcm']=$_POST['hcm'];
	$_SESSION['hinch']=$_POST['hinch'];
	$_SESSION['religion']=$_POST['religion'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['nationality']=$_POST['nationality'];
	$_SESSION['citizenshipstatus']=$_POST['citizenshipstatus'];
	$_SESSION['dcitizenship']=$_POST['dcitizenship'];
	$_SESSION['village']=$_POST['village'];
	$_SESSION['road']=$_POST['road'];
	$_SESSION['district']=$_POST['district'];
	$_SESSION['policestation']=$_POST['policestation'];
	$_SESSION['postoffice']=$_POST['postoffice'];
	if(isset($_POST['same']))
		{
			$_SESSION['same']=$_POST['same'];
		}
	if(isset($_SESSION['same']))
		{
			$_SESSION['pvillage']=$_POST['village'];
			$_SESSION['proad']=$_POST['road'];
			$_SESSION['pdistrict']=$_POST['district'];
			$_SESSION['ppolicestation']=$_POST['policestation'];
			$_SESSION['ppostoffice']=$_POST['postoffice'];
		}
	else
	{
		$_SESSION['pvillage']=$_POST['pvillage'];
		$_SESSION['proad']=$_POST['proad'];
		$_SESSION['pdistrict']=$_POST['pdistrict'];
		$_SESSION['ppolicestation']=$_POST['ppolicestation'];
		$_SESSION['ppostoffice']=$_POST['ppostoffice'];
	}	
	$_SESSION['id']=$_POST['id'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<style>
			select{width:80%;}
		</style>
		<title>Registration p2</title>
	</head>
		<body align="center">
			<form name="page2" action="page3.php" method="post">
				<table align="center" border="0" style="width:60%;border-collapse: collapse">
					<tr colspan="2">
						<td align="left">
							<h3> PASSPORT APPLICATION - STAGE 2</h3>
							<?php
								echo '<h4 align="left" style="color:green;">Online application ID : '.$_SESSION['id'].'</h4>';
							?>
							<h5>Fields marked with <i style="color:red;">(*)</i> are mandatory.</h5>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<table align="center" border="1" style="width:100%;border-collapse: collapse">
								<tr>
									<td>
										<table align="center" border="0" style="width:100%;border-collapse: collapse">
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Applicant Contact Information</h4>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['officeno']))
												{
													echo '<td><h6>Office No :</h6></td><td><input type="text" name="officeno" size="20"></td>';
												}
												else{
													echo '<td><h6>Office No :</h6></td><td><input type="text" name="officeno" value="'.$_SESSION['officeno'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['residenceno']))
												{
													echo '<td><h6>Residence No :</h6></td><td><input type="text" name="residenceno" size="20"></td>';
												}
												else{
													echo '<td><h6>Residence No :</h6></td><td><input type="text" name="residenceno" value="'.$_SESSION['residenceno'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['mobileno']))
												{
													echo '<td><h6>Mobile No :</h6></td><td><input type="text" name="mobileno" size="20"></td>';
												}
												else{
													echo '<td><h6>Mobile No :</h6></td><td><input type="text" name="mobileno" value="'.$_SESSION['mobileno'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Emergency Contact Person's Details</h4>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['ename']))
												{
													echo '<td><h6>Name :<i style="color:red;">*</i></h6></td><td><input type="text" name="ename" size="20"></td>';
												}
												else{
													echo '<td><h6>Name :<i style="color:red;">*</i></h6></td><td><input type="text" name="ename" value="'.$_SESSION['ename'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>Country :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['ecountry']))
													{
														echo '<select name="ecountry">';
															echo '<option value="Bangladesh">Bangladesh</option>';
															echo '<option value="Spain">Spain</option>';
															echo '<option value="England">England</option>';
															echo '<option value="Qatar">Qatar</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['ecountry']=="Bangladesh")
															{
																echo '<select name="ecountry">';
																	echo '<option value="Bangladesh" selected>Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['ecountry']=="Spain")
															{
																echo '<select name="ecountry">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain" selected>Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['ecountry']=="England")
															{
																echo '<select name="ecountry">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England" selected>England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="ecountry">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar" selected>Qatar</option>';
																echo '</select>';
															}
													}
												?>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['samepage2']))
													{
														echo '<td colspan="2" align="left"><h6><input type="checkbox" name="samepage2" value="permanent"> Same as permanent address</h6></td>';
													}
													else
													{
														if($_SESSION['samepage2']=="permanent")
														{
															echo '<td colspan="2" align="left"><h6><input type="checkbox" name="samepage2" value="permanent" checked> Same as permanent address</h6></td>';
														}
														else
														{
															echo '<td colspan="2" align="left"><h6><input type="checkbox" name="samepage2" value="permanent"> Same as permanent address</h6></td>';
														}
													}
											?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['samepage2']))
													{
														echo '<td colspan="2" align="left"><h6><input type="checkbox" name="samepage2" value="present"> Same as present address</h6></td>';
													}
													else{
															
														if($_SESSION['samepage2']=="present")
															{
																echo '<td colspan="2" align="left"><h6><input type="checkbox" name="samepage2" value="present" checked> Same as present address</h6></td>';
															}
															else
															{
																echo '<td colspan="2" align="left"><h6><input type="checkbox" name="samepage2" value="present"> Same as present address</h6></td>';
															}
														}
											?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['evillage']))
												{
													echo '<td><h6>Village/House :</h6></td><td><input type="text" name="evillage" size="20"></td>';
												}
												else{
													echo '<td><h6>Village/House :</h6></td><td><input type="text" name="evillage" value="'.$_SESSION['evillage'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['eroad']))
												{
													echo '<td><h6>Road/Block/Sector :</h6></td><td><input type="text" name="eroad" size="20"></td>';
												}
												else{
													echo '<td><h6>Road/Block/Sector :</h6></td><td><input type="text" name="eroad" value="'.$_SESSION['eroad'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>District :<i style="color:red;">*</i></h6></td>
													<td>
														<?php
														if(!isset($_SESSION['edistrict']))
														{
															echo '<select name="edistrict" >';
																echo '<option value="select">-SELECT-</option>';
																echo '<option value="Dhaka">Dhaka</option>';
																echo '<option value="Rangpur">Rangpur</option>';
																echo '<option value="Sylhet">Sylhet</option>';
																echo '<option value="Chittagong">Chittagong</option>';
																echo '<option value="Rajshahi">Rajshahi</option>';
																echo '<option value="Barisal">Barisal</option>';
															echo '</select>';
														}
														else
														{
															if($_SESSION['edistrict']=="Dhaka")
															{
																echo '<select name="edistrict" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['edistrict']=="Rangpur")
															{
																echo '<select name="edistrict" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['edistrict']=="Sylhet")
															{
																echo '<select name="edistrict" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['edistrict']=="Chittagong")
															{
																echo '<select name="edistrict" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['edistrict']=="Rajshahi")
															{
																echo '<select name="edistrict" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi" selected>Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="edistrict" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal" selected>Barisal</option>';
																echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<td><h6>Police Station :<i style="color:red;">*</i></h6></td>
												<td>
													<?php
														if(!isset($_SESSION['epolicestation']))
														{
															echo '<select name="epolicestation" >';
																echo '<option value="select">-SELECT-</option>';
																echo '<option value="Dhaka">Dhaka</option>';
																echo '<option value="Rangpur">Rangpur</option>';
																echo '<option value="Sylhet">Sylhet</option>';
																echo '<option value="Chittagong">Chittagong</option>';
																echo '<option value="Rajshahi">Rajshahi</option>';
																echo '<option value="Barisal">Barisal</option>';
															echo '</select>';
														}
														else
														{
															if($_SESSION['epolicestation']=="Dhaka")
															{
																echo '<select name="epolicestation" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['epolicestation']=="Rangpur")
															{
																echo '<select name="epolicestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['epolicestation']=="Sylhet")
															{
																echo '<select name="epolicestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['epolicestation']=="Chittagong")
															{
																echo '<select name="epolicestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['epolicestation']=="Rajshahi")
															{
																echo '<select name="epolicestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi" selected>Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="epolicestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal" selected>Barisal</option>';
																echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<td><h6>Post Office :<i style="color:red;">*</i></h6></td>
												<td>
													<?php
														if(!isset($_SESSION['epostoffice']))
														{
															echo '<select name="epostoffice" >';
																echo '<option value="select">-SELECT-</option>';
																echo '<option value="Dhaka">Dhaka</option>';
																echo '<option value="Rangpur">Rangpur</option>';
																echo '<option value="Sylhet">Sylhet</option>';
																echo '<option value="Chittagong">Chittagong</option>';
																echo '<option value="Rajshahi">Rajshahi</option>';
																echo '<option value="Barisal">Barisal</option>';
															echo '</select>';
														}
														else
														{
															if($_SESSION['epostoffice']=="Dhaka")
															{
																echo '<select name="epostoffice" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['epostoffice']=="Rangpur")
															{
																echo '<select name="epostoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['epostoffice']=="Sylhet")
															{
																echo '<select name="epostoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['epostoffice']=="Chittagong")
															{
																echo '<select name="epostoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['epostoffice']=="Rajshahi")
															{
																echo '<select name="epostoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi" selected>Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="epostoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal" selected>Barisal</option>';
																echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['econtactno']))
												{
													echo '<td><h6>Contact No :<i style="color:red;">*</i></h6></td><td><input type="text" name="econtactno" size="20"></td>';
												}
												else{
													echo '<td><h6>Contact No :<i style="color:red;">*</i></h6></td><td><input type="text" name="econtactno" value="'.$_SESSION['econtactno'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['eemail']))
												{
													echo '<td><h6>Email :</h6></td><td><input type="email" name="eemail" size="20"></td>';
												}
												else{
													echo '<td><h6>Email :</h6></td><td><input type="email" name="eemail" value="'.$_SESSION['eemail'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>								
												<td><h6>Relationship :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
												if(!isset($_SESSION['erelation']))
												{
													echo '<select name="erelation" >';
														echo '<option value="select">-SELECT-</option>';
														echo '<option value="Parent">Parent</option>';
														echo '<option value="Relative">Relative</option>';
														echo '<option value="Other">Other</option>';
													echo '</select>';
												}
												else{
													if($_SESSION['erelation']=="Parent")
													{
														echo '<select name="erelation" >';
															echo '<option value="Parent" selected>Parent</option>';
															echo '<option value="Relative">Relative</option>';
															echo '<option value="Other">Other</option>';
														echo '</select>';
													}
													else if($_SESSION['erelation']=="Relative")
													{
														echo '<select name="erelation" >';
															echo '<option value="Parent">Parent</option>';
															echo '<option value="Relative" selected>Relative</option>';
															echo '<option value="Other">Other</option>';
														echo '</select>';
													}
													else
													{
														echo '<select name="erelation" >';
															echo '<option value="Parent">Parent</option>';
															echo '<option value="Relative">Relative</option>';
															echo '<option value="Other" selected>Other</option>';
														echo '</select>';
													}
												}
												?>
												</td>
											</tr>	
										</table>
									</td>
									<td>
										<table align="center" border="0" style="width:100%;border-collapse: collapse">
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Old Passport Information</h4>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['oldpassno']))
												{
													echo '<td><h6>Passport No :</h6></td><td><input type="text" name="oldpassno" size="20"></td>';
												}
												else{
													echo '<td><h6>Passport No :</h6></td><td><input type="text" name="oldpassno" value="'.$_SESSION['oldpassno'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['placeoi']))
												{
													echo '<td><h6>Place of Issue :</h6></td><td><input type="text" name="placeoi" size="20"></td>';
												}
												else{
													echo '<td><h6>Place of Issue :</h6></td><td><input type="text" name="placeoi" value="'.$_SESSION['placeoi'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['dateoi']))
												{
													echo '<td><h6>Date of Issue :</h6></td><td><input type="text" name="dateoi" size="20"></td>';
												}
												else{
													echo '<td><h6>Date of Issue :</h6></td><td><input type="text" name="dateoi" value="'.$_SESSION['dateoi'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>Re-issue Reason :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
												if(!isset($_SESSION['rereason']))
												{
													echo '<select name="rereason">';
														echo '<option value="select">-SELECT-</option>';
														echo '<option value="Job">Job</option>';
														echo '<option value="Personal">Personal</option>';
														echo '<option value="Other">Other</option>';
													echo '</select>';
												}
												else{
													if($_SESSION['rereason']=="Job")
													{
														echo '<select name="rereason">';
															echo '<option value="Job" selected>Job</option>';
															echo '<option value="Personal">Personal</option>';
															echo '<option value="Other">Other</option>';
														echo '</select>';
													}
													else if($_SESSION['rereason']=="Personal")
													{
														echo '<select name="rereason">';
															echo '<option value="Job">Job</option>';
															echo '<option value="Personal" selected>Personal</option>';
															echo '<option value="Other">Other</option>';
														echo '</select>';
													}
													else
													{
														echo '<select name="rereason">';
															echo '<option value="Job">Job</option>';
															echo '<option value="Personal">Personal</option>';
															echo '<option value="Other" selected>Other</option>';
														echo '</select>';
													}
												}
												?>
												</td>
											</tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
											<tr ><td colspan="2"><h6>.</h6></td></tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="right" colspan="2">
							<a href="index.php"><button type="button">PREVIOUS PAGE</button></a>
							<input type="submit" value="Save & NEXT">
						</td>
					</tr>
				</table>
			</form>	
		</body>
</html>