<?php
session_start(); //start the PHP_session function 

$_SESSION['p1visited']="false";

?>

<!DOCTYPE html>
<html>
	<head>
		<style>
			select{width:68%;}
		</style>
		<title>Registration p1</title>
	</head>
		<body align="center">
			<form name="page1" action="page2.php" method="post">
				<?php
					$d= date("d-m-Y")."-".time();
					echo '<input type="hidden" name="id" value="'.$d.'">';
				?>
				<table align="center" border="0" style="width:60%;border-collapse: collapse">
					<tr colspan="2">
						<td align="left">
							<h3> PASSPORT APPLICATION - STAGE 1</h3>
							<h5 style="color:red;"><i>Before filling up online application form read the <u style="color:green;">guidelins</u> carefully</i></h5>
							<h5>Fields marked with <i style="color:red;">(*)</i> are mandatory.</h5>
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
												<td><h6>Applying in :<i style="color:red;">*</i></h6></td> 
												<td>
													<?php
													if(!isset($_SESSION['applyin']))
													{
														echo '<select name="applyin">';
															echo '<option value="Bangladesh">Bangladesh</option>';
															echo '<option value="Spain">Spain</option>';
															echo '<option value="England">England</option>';
															echo '<option value="Qatar">Qatar</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['applyin']=="Bangladesh")
															{
																echo '<select name="applyin">';
																	echo '<option value="Bangladesh" selected>Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['applyin']=="Spain")
															{
																echo '<select name="applyin">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain" selected>Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['applyin']=="England")
															{
																echo '<select name="applyin">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England" selected>England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="applyin">';
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
													<td><h6>Application Type :</h6></td><td><h6><b>NEW APPLICATION</b><h6></td>
											</tr>
											<tr>
												<td><h6>Passport Type :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['passtype']))
													{
														echo '<select name="passtype">';
															echo '<option value="select">-SELECT-</option>';
															echo '<option value="Ordinary international passport">Ordinary international passport</option>';
															echo '<option value="Official passport">Official passport</option>';
															echo '<option value="Diplomatic passport">Diplomatic passport</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['passtype']=="Ordinary international passport")
															{
																echo '<select name="passtype">';
																	echo '<option value="Ordinary international passport" selected>Ordinary international passport</option>';
																	echo '<option value="Official passport">Official passport</option>';
																	echo '<option value="Diplomatic passport">Diplomatic passport</option>';
																echo '</select>';
															}
														else if($_SESSION['passtype']=="Official passport")
															{
																echo '<select name="passtype">';
																	echo '<option value="Ordinary international passport">Ordinary international passport</option>';
																	echo '<option value="Official passport" selected>Official passport</option>';
																	echo '<option value="Diplomatic passport">Diplomatic passport</option>';
																echo '</select>';
															}
														else
															{
																echo '<select name="passtype">';
																	echo '<option value="Ordinary international passport">Ordinary international passport</option>';
																	echo '<option value="Official passport">Official passport</option>';
																	echo '<option value="Diplomatic passport" selected>Diplomatic passport</option>';
																echo '</select>';
															}
													}
												?>
												</td>
											</tr>
											<tr>
												<td><h6>Delivery Type :</h6></td>
												<td align="left">
												<?php
													if(!isset($_SESSION['dtype']))
													{
														echo '<input type="radio" name="dtype" value="Regular"> Regular<br>';
														echo '<input type="radio" name="dtype" value="Express"> Express<br>';
													}
													else{
														if($_SESSION['dtype']=="Regular")
															{
																echo '<input type="radio" name="dtype" value="Regular" checked> Regular<br>';
																echo '<input type="radio" name="dtype" value="Express"> Express<br>';
															}
														else
															{
																echo '<input type="radio" name="dtype" value="Regular"> Regular<br>';
																echo '<input type="radio" name="dtype" value="Express" checked> Express<br>';
															}
													}
												?>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Personal Information</h4>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['applicantname']))
												{
													echo '<td><h6>Name of <br>applicant :<i style="color:red;">*</i></h6></td><td><input type="text" name="applicantname" size="20"></td>';
												}
												else{
													echo '<td><h6>Name of <br>applicant :<i style="color:red;">*</i></h6></td><td><input type="text" name="applicantname" value="'.$_SESSION['applicantname'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['firstname']))
												{
													echo '<td><h6>First Part <br>[Given Name] :</h6></td><td><input type="text" name="firstname" size="20"></td>';
												}
												else{
													echo '<td><h6>First Part <br>[Given Name] :</h6></td><td><input type="text" name="firstname" value="'.$_SESSION['firstname'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['surname']))
												{
													echo '<td><h6>Second Part <br>[Surname] :<i style="color:red;">*</i></h6></td><td><input type="text" name="surname" size="20"></td>';
												}
												else{
													echo '<td><h6>Second Part <br>[Surname] :<i style="color:red;">*</i></h6></td><td><input type="text" name="surname" value="'.$_SESSION['surname'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td colspan="2" align="left"><h6>Guardian <input type="checkbox" name="guardian" value="true"><i style="color:red;">*Tick*</i> Only if Applicant is legally adopted</h6></td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['fathername']))
												{
													echo '<td><h6>Father Name :<i style="color:red;">*</i></h6></td><td><input type="text" name="fathername" size="20"></td>';
												}
												else{
													echo '<td><h6>Father Name :<i style="color:red;">*</i></h6></td><td><input type="text" name="fathername" value="'.$_SESSION['fathername'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>Father's<br>Nationality :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['fathernationality']))
													{
														echo '<select name="fathernationality">';
															echo '<option value="Bangladesh">Bangladesh</option>';
															echo '<option value="Spain">Spain</option>';
															echo '<option value="England">England</option>';
															echo '<option value="Qatar">Qatar</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['fathernationality']=="Bangladesh")
															{
																echo '<select name="fathernationality">';
																	echo '<option value="Bangladesh" selected>Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['fathernationality']=="Spain")
															{
																echo '<select name="fathernationality">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain" selected>Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['fathernationality']=="England")
															{
																echo '<select name="fathernationality">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England" selected>England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="fathernationality">';
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
												<td><h6>Father's <br>Profession :<i style="color:red;">*</i></h6></td>
												<td>
													<?php
													if(!isset($_SESSION['fatherprofession']))
													{
														echo '<select name="fatherprofession">';
															echo '<option value="select">-SELECT-</option>';
															echo '<option value="Civil">Civil</option>';
															echo '<option value="Defence">Defence</option>';
															echo '<option value="Government">Government</option>';
															echo '<option value="Other">Other</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['fatherprofession']=="Civil")
															{
																echo '<select name="fatherprofession">';
																	echo '<option value="Civil" selected>Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else if($_SESSION['fatherprofession']=="Defence")
															{
																echo '<select name="fatherprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence" selected>Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else if($_SESSION['fatherprofession']=="Government")
															{
																echo '<select name="fatherprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government" selected>Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else
															{
																echo '<select name="fatherprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other" selected>Other</option>';
																echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['mothername']))
												{
													echo '<td><h6>Mother Name :<i style="color:red;">*</i></h6></td><td><input type="text" name="mothername" size="20"></td>';
												}
												else{
													echo '<td><h6>Mother Name :<i style="color:red;">*</i></h6></td><td><input type="text" name="mothername" value="'.$_SESSION['mothername'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>Mother's<br>Nationality :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['mothernationality']))
													{
														echo '<select name="mothernationality">';
															echo '<option value="Bangladesh">Bangladesh</option>';
															echo '<option value="Spain">Spain</option>';
															echo '<option value="England">England</option>';
															echo '<option value="Qatar">Qatar</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['mothernationality']=="Bangladesh")
															{
																echo '<select name="mothernationality">';
																	echo '<option value="Bangladesh" selected>Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['mothernationality']=="Spain")
															{
																echo '<select name="mothernationality">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain" selected>Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['mothernationality']=="England")
															{
																echo '<select name="mothernationality">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England" selected>England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="mothernationality">';
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
												<td><h6>Mother's <br>Profession :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['motherprofession']))
													{
														echo '<select name="motherprofession">';
															echo '<option value="select">-SELECT-</option>';
															echo '<option value="Civil">Civil</option>';
															echo '<option value="Defence">Defence</option>';
															echo '<option value="Government">Government</option>';
															echo '<option value="Other">Other</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['motherprofession']=="Civil")
															{
																echo '<select name="motherprofession">';
																	echo '<option value="Civil" selected>Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else if($_SESSION['motherprofession']=="Defence")
															{
																echo '<select name="motherprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence" selected>Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else if($_SESSION['motherprofession']=="Government")
															{
																echo '<select name="motherprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government" selected>Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else
															{
																echo '<select name="motherprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other" selected>Other</option>';
																echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['spousename']))
												{
													echo '<td><h6>Spouse Name :</h6></td><td><input type="text" name="spousename" size="20"></td>';
												}
												else{
													echo '<td><h6>Spouse Name :</h6></td><td><input type="text" name="spousename" value="'.$_SESSION['spousename'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>Spouse's<br>Nationality :</h6></td>
												<td>
												<?php
													if(!isset($_SESSION['spousenationality']))
													{
														echo '<select name="spousenationality">';
															echo '<option value="Bangladesh">Bangladesh</option>';
															echo '<option value="Spain">Spain</option>';
															echo '<option value="England">England</option>';
															echo '<option value="Qatar">Qatar</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['spousenationality']=="Bangladesh")
															{
																echo '<select name="spousenationality">';
																	echo '<option value="Bangladesh" selected>Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['spousenationality']=="Spain")
															{
																echo '<select name="spousenationality">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain" selected>Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['spousenationality']=="England")
															{
																echo '<select name="spousenationality">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England" selected>England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="spousenationality">';
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
												<td><h6>Spouse's <br>Profession :</h6></td>
												<td>
													<?php
													if(!isset($_SESSION['spouseprofession']))
													{
														echo '<select name="spouseprofession">';
															echo '<option value="select">-SELECT-</option>';
															echo '<option value="Civil">Civil</option>';
															echo '<option value="Defence">Defence</option>';
															echo '<option value="Government">Government</option>';
															echo '<option value="Other">Other</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['spouseprofession']=="Civil")
															{
																echo '<select name="spouseprofession">';
																	echo '<option value="Civil" selected>Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else if($_SESSION['spouseprofession']=="Defence")
															{
																echo '<select name="spouseprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence" selected>Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else if($_SESSION['spouseprofession']=="Government")
															{
																echo '<select name="spouseprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government" selected>Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else
															{
																echo '<select name="spouseprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other" selected>Other</option>';
																echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<td><h6>Marital Status :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['marital']))
													{
														echo '<select name="marital">';
															echo '<option value="select">-SELECT-</option>';
															echo '<option value="Single">Single</option>';
															echo '<option value="Married">Married</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['marital']=="Single")
															{
																echo '<select name="marital">';
																	echo '<option value="Single" selected>Single</option>';
																	echo '<option value="Married">Married</option>';
																echo '</select>';
															}
														else
															{
																echo '<select name="marital">';
																	echo '<option value="Single">Single</option>';
																	echo '<option value="Married" selected>Married</option>';
																echo '</select>';
															}
													}
												?>
												</td>
											</tr>
											<tr>
												<td><h6>Applicant's <br>Profession :<i style="color:red;">*</i></h6></td>
												<td>
													<?php
													if(!isset($_SESSION['applicantprofession']))
													{
														echo '<select name="applicantprofession">';
															echo '<option value="select">-SELECT-</option>';
															echo '<option value="Civil">Civil</option>';
															echo '<option value="Defence">Defence</option>';
															echo '<option value="Government">Government</option>';
															echo '<option value="Other">Other</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['applicantprofession']=="Civil")
															{
																echo '<select name="applicantprofession">';
																	echo '<option value="Civil" selected>Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else if($_SESSION['applicantprofession']=="Defence")
															{
																echo '<select name="applicantprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence" selected>Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else if($_SESSION['applicantprofession']=="Government")
															{
																echo '<select name="applicantprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government" selected>Government</option>';
																	echo '<option value="Other">Other</option>';
																echo '</select>';
															}
														else
															{
																echo '<select name="applicantprofession">';
																	echo '<option value="Civil">Civil</option>';
																	echo '<option value="Defence">Defence</option>';
																	echo '<option value="Government">Government</option>';
																	echo '<option value="Other" selected>Other</option>';
																echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<td><h6>Country of<br>Birth :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['cob']))
													{
														echo '<select name="cob">';
															echo '<option value="Bangladesh">Bangladesh</option>';
															echo '<option value="Spain">Spain</option>';
															echo '<option value="England">England</option>';
															echo '<option value="Qatar">Qatar</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['cob']=="Bangladesh")
															{
																echo '<select name="cob">';
																	echo '<option value="Bangladesh" selected>Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['cob']=="Spain")
															{
																echo '<select name="cob">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain" selected>Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['cob']=="England")
															{
																echo '<select name="cob">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England" selected>England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="cob">';
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
												<td><h6>Birth District :<i style="color:red;">*</i></h6></td>
												<td>
														<?php
														if(!isset($_SESSION['bd']))
														{
															echo '<select name="bd" >';
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
															if($_SESSION['bd']=="Dhaka")
															{
																echo '<select name="bd" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['bd']=="Rangpur")
															{
																echo '<select name="bd" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['bd']=="Sylhet")
															{
																echo '<select name="bd" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['bd']=="Chittagong")
															{
																echo '<select name="bd" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['bd']=="Rajshahi")
															{
																echo '<select name="bd" >';
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
																echo '<select name="bd" >';
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
										</table>
									</td>
									<td>
										<table align="center" style="width:100%;border-collapse: collapse">
											<tr>
												<?php
												if(!isset($_SESSION['dob']))
												{
													echo '<td><h6>Date of Birth :<i style="color:red;">*</i></h6></td><td><input type="text" name="dob" size="20"></td>';
												}
												else{
													echo '<td><h6>Date of Birth :<i style="color:red;">*</i></h6></td><td><input type="text" name="dob" value="'.$_SESSION['dob'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr rowspan="2">
												<td><h6>Gender :</h6><i style="color:red;">*</i></td>
												<td align="left">
													<?php
														if(!isset($_SESSION['gender']))
														{
															echo '<input type="radio" name="gender" value="Male"> Male<br>';
															echo '<input type="radio" name="gender" value="Female"> Female<br>';
															echo '<input type="radio" name="gender" value="Others"> Others<br>';
														}
														else
														{
															if($_SESSION['gender']=="Male")
															{
																echo '<input type="radio" name="gender" value="Male" checked> Male<br>';
																echo '<input type="radio" name="gender" value="Female"> Female<br>';
																echo '<input type="radio" name="gender" value="Others"> Others<br>';
															}
															else if($_SESSION['gender']=="Female")
															{
																echo '<input type="radio" name="gender" value="Male"> Male<br>';
																echo '<input type="radio" name="gender" value="Female" checked> Female<br>';
																echo '<input type="radio" name="gender" value="Others"> Others<br>';
															}
															else
															{
																echo '<input type="radio" name="gender" value="Male"> Male<br>';
																echo '<input type="radio" name="gender" value="Female"> Female<br>';
																echo '<input type="radio" name="gender" value="Others" checked> Others<br>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['bid']))
												{
													echo '<td><h6>Birth ID No :<i style="color:red;">*</i></h6></td><td><input type="text" name="bid" size="20"></td>';
												}
												else{
													echo '<td><h6>Birth ID No :<i style="color:red;">*</i></h6></td><td><input type="text" name="bid" value="'.$_SESSION['bid'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['nid']))
												{
													echo '<td><h6>National ID No :</h6></td><td><input type="text" name="nid" size="20"></td>';
												}
												else{
													echo '<td><h6>National ID No :</h6></td><td><input type="text" name="nid" value="'.$_SESSION['nid'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['tid']))
												{
													echo '<td><h6>Tax ID No :</h6></td><td><input type="text" name="tid" size="20"></td>';
												}
												else{
													echo '<td><h6>Tax ID No :</h6></td><td><input type="text" name="tid" value="'.$_SESSION['tid'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['hcm'])&& !isset($_SESSION['hinch']))
												{
													echo '<td><h6>Height :<i style="color:red;">*</i></h6></td><td><input type="text" name="hcm" size="6"> cm <input type="text" name="hinch" size="6"> inch</td>';
												}
												else{
													echo '<td><h6>Height :<i style="color:red;">*</i></h6></td><td><input type="text" name="hcm" value="'.$_SESSION['hcm'].'" size="6"> cm <input type="text" name="hinch" value="'.$_SESSION['hinch'].'" size="6"> inch</td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>Religion :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['religion']))
													{
														echo '<select name="religion">';
															echo '<option value="select">-SELECT-</option>';
															echo '<option value="Islam">Islam</option>';
															echo '<option value="Hindu">Hindu</option>';
															echo '<option value="Christan">Christan</option>';
															echo '<option value="Others">Others</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['religion']=="Islam")
															{
																echo '<select name="religion">';
																	echo '<option value="Islam">Islam</option>';
																	echo '<option value="Hindu">Hindu</option>';
																	echo '<option value="Christan">Christan</option>';
																	echo '<option value="Others">Others</option>';
																echo '</select>';
															}
														else if($_SESSION['religion']=="Islam")
															{
																echo '<select name="religion">';
																	echo '<option value="Islam" selected>Islam</option>';
																	echo '<option value="Hindu">Hindu</option>';
																	echo '<option value="Christan">Christan</option>';
																echo '<option value="Others">Others</option>';
															}
														else if($_SESSION['religion']=="Hindu")
															{
																echo '<select name="religion">';
																	echo '<option value="Islam">Islam</option>';
																	echo '<option value="Hindu" selected>Hindu</option>';
																	echo '<option value="Christan">Christan</option>';
																echo '<option value="Others">Others</option>';
															}
														else if($_SESSION['religion']=="Christan")
															{
																echo '<select name="religion">';
																	echo '<option value="Islam">Islam</option>';
																	echo '<option value="Hindu">Hindu</option>';
																	echo '<option value="Christan" selected>Christan</option>';
																echo '<option value="Others">Others</option>';
															}
														else
															{
																echo '<select name="religion">';
																	echo '<option value="Islam">Islam</option>';
																	echo '<option value="Hindu">Hindu</option>';
																	echo '<option value="Christan">Christan</option>';
																echo '<option value="Others" selected>Others</option>';
															}
													}
												?>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['email']))
												{
													echo '<td><h6>Email :<i style="color:red;">*</i></h6></td><td><input type="email" name="email" size="20"></td>';
												}
												else{
													echo '<td><h6>Email :<i style="color:red;">*</i></h6></td><td><input type="email" name="email" value="'.$_SESSION['email'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Citizenship Information</h4>
												</td>
											</tr>
											<tr>
												<td><h6>Nationality :<i style="color:red;">*</i></h6></td>
												<td>
												<?php
													if(!isset($_SESSION['nationality']))
													{
														echo '<select name="nationality">';
															echo '<option value="Bangladesh">Bangladesh</option>';
															echo '<option value="Spain">Spain</option>';
															echo '<option value="England">England</option>';
															echo '<option value="Qatar">Qatar</option>';
														echo '</select>';
													}
													else{
														if($_SESSION['nationality']=="Bangladesh")
															{
																echo '<select name="nationality">';
																	echo '<option value="Bangladesh" selected>Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['nationality']=="Spain")
															{
																echo '<select name="nationality">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain" selected>Spain</option>';
																	echo '<option value="England">England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else if($_SESSION['nationality']=="England")
															{
																echo '<select name="nationality">';
																	echo '<option value="Bangladesh">Bangladesh</option>';
																	echo '<option value="Spain">Spain</option>';
																	echo '<option value="England" selected>England</option>';
																	echo '<option value="Qatar">Qatar</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="nationality">';
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
												<td><h6>Citizenship Status :<i style="color:red;">*</i></h6></td>
												<td>
													<?php
														if(!isset($_SESSION['citizenshipstatus']))
														{
															echo '<select name="citizenshipstatus" >';
																echo '<option value="Birth">Birth</option>';
																echo '<option value="Parent">Parent</option>';
															echo '</select>';
														}
														else
														{
															if($_SESSION['citizenshipstatus']=="Birth")
															{
																echo '<select name="citizenshipstatus" >';
																echo '<option value="Birth" selected>Birth</option>';
																echo '<option value="Parent">Parent</option>';
															echo '</select>';
															}
															else
															{
																echo '<select name="citizenshipstatus" >';
																echo '<option value="Birth">Birth</option>';
																echo '<option value="Parent" selected>Parent</option>';
															echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<td><h6>Dual Citizenship :</h6><i style="color:red;">*</i></td>
												<td align="left">
													<?php
														if(!isset($_SESSION['dcitizenship']))
														{
															echo '<input type="radio" name="dcitizenship" value="yes"> Yes<br>';
															echo '<input type="radio" name="dcitizenship" value="no"> No<br>';
														}
														else
														{
															if($_SESSION['dcitizenship']=="yes")
															{
																echo '<input type="radio" name="dcitizenship" value="yes" checked> Yes<br>';
																echo '<input type="radio" name="dcitizenship" value="no"> No<br>';
															}
															else
															{
																echo '<input type="radio" name="dcitizenship" value="yes"> Yes<br>';
																echo '<input type="radio" name="dcitizenship" value="no" checked> No<br>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<h4 align="left" style="color:green;"> Present Address</h4>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['village']))
												{
													echo '<td><h6>Village/House :</h6></td><td><input type="text" name="village" size="20"></td>';
												}
												else{
													echo '<td><h6>Village/House :</h6></td><td><input type="text" name="village" value="'.$_SESSION['village'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['road']))
												{
													echo '<td><h6>Road/Block/Sector :</h6></td><td><input type="text" name="road" size="20"></td>';
												}
												else{
													echo '<td><h6>Road/Block/Sector :</h6></td><td><input type="text" name="road" value="'.$_SESSION['road'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>District :<i style="color:red;">*</i></h6></td>
												<td>
														<?php
														if(!isset($_SESSION['district']))
														{
															echo '<select name="district" >';
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
															if($_SESSION['district']=="Dhaka")
															{
																echo '<select name="district" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['district']=="Rangpur")
															{
																echo '<select name="district" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['district']=="Sylhet")
															{
																echo '<select name="district" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['district']=="Chittagong")
															{
																echo '<select name="district" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['district']=="Rajshahi")
															{
																echo '<select name="district" >';
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
																echo '<select name="district" >';
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
														if(!isset($_SESSION['policestation']))
														{
															echo '<select name="policestation" >';
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
															if($_SESSION['policestation']=="Dhaka")
															{
																echo '<select name="policestation" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['policestation']=="Rangpur")
															{
																echo '<select name="policestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['policestation']=="Sylhet")
															{
																echo '<select name="policestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['policestation']=="Chittagong")
															{
																echo '<select name="policestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['policestation']=="Rajshahi")
															{
																echo '<select name="policestation" >';
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
																echo '<select name="policestation" >';
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
														if(!isset($_SESSION['postoffice']))
														{
															echo '<select name="postoffice" >';
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
															if($_SESSION['postoffice']=="Dhaka")
															{
																echo '<select name="postoffice" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['postoffice']=="Rangpur")
															{
																echo '<select name="postoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['postoffice']=="Sylhet")
															{
																echo '<select name="postoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['postoffice']=="Chittagong")
															{
																echo '<select name="postoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['postoffice']=="Rajshahi")
															{
																echo '<select name="postoffice" >';
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
																echo '<select name="postoffice" >';
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
												<td colspan="2">
													<h4 align="left" style="color:green;"> Permanent Address</h4>
												</td>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['same']))
													{
														echo '<td colspan="2" align="left"><h6><input type="checkbox" name="same" value="true"> Same as above</h6></td>';
													}
													else{
															echo '<td colspan="2" align="left"><h6><input type="checkbox" name="same" value="true" checked> Same as above</h6></td>';
														}
											?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['pvillage']))
												{
													echo '<td><h6>Village/House :</h6></td><td><input type="text" name="pvillage" size="20"></td>';
												}
												else{
													echo '<td><h6>Village/House :</h6></td><td><input type="text" name="pvillage" value="'.$_SESSION['pvillage'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<?php
												if(!isset($_SESSION['proad']))
												{
													echo '<td><h6>Road/Block/Sector :</h6></td><td><input type="text" name="proad" size="20"></td>';
												}
												else{
													echo '<td><h6>Road/Block/Sector :</h6></td><td><input type="text" name="proad" value="'.$_SESSION['proad'].'" size="20"></td>';
												}
												?>
											</tr>
											<tr>
												<td><h6>District :<i style="color:red;">*</i></h6></td>
												<td>
														<?php
														if(!isset($_SESSION['pdistrict']))
														{
															echo '<select name="pdistrict" >';
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
															if($_SESSION['pdistrict']=="Dhaka")
															{
																echo '<select name="pdistrict" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['pdistrict']=="Rangpur")
															{
																echo '<select name="pdistrict" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['pdistrict']=="Sylhet")
															{
																echo '<select name="pdistrict" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['pdistrict']=="Chittagong")
															{
																echo '<select name="pdistrict" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['pdistrict']=="Rajshahi")
															{
																echo '<select name="pdistrict" >';
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
																echo '<select name="pdistrict" >';
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
														if(!isset($_SESSION['ppolicestation']))
														{
															echo '<select name="ppolicestation" >';
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
															if($_SESSION['ppolicestation']=="Dhaka")
															{
																echo '<select name="ppolicestation" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['ppolicestation']=="Rangpur")
															{
																echo '<select name="ppolicestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['ppolicestation']=="Sylhet")
															{
																echo '<select name="ppolicestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['ppolicestation']=="Chittagong")
															{
																echo '<select name="ppolicestation" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['ppolicestation']=="Rajshahi")
															{
																echo '<select name="ppolicestation" >';
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
																echo '<select name="ppolicestation" >';
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
														if(!isset($_SESSION['ppostoffice']))
														{
															echo '<select name="ppostoffice" >';
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
															if($_SESSION['ppostoffice']=="Dhaka")
															{
																echo '<select name="ppostoffice" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['ppostoffice']=="Rangpur")
															{
																echo '<select name="ppostoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['ppostoffice']=="Sylhet")
															{
																echo '<select name="ppostoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['ppostoffice']=="Chittagong")
															{
																echo '<select name="ppostoffice" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['ppostoffice']=="Rajshahi")
															{
																echo '<select name="ppostoffice" >';
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
																echo '<select name="ppostoffice" >';
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
										</table>
									</td>
								</tr>
								<tr>
									<td align="right" colspan="2"><input type="submit" value="Save & NEXT"> </td>
								</tr>
								
							</table>
						</td>
					</tr>
					
				</table>
			</form>	
		</body>
</html>