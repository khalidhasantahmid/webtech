<?php
session_start(); //start the PHP_session function 

if($_SESSION['p2visited']=="false")
{
	$_SESSION['p2visited']="true";
	$_SESSION['officeno']=$_POST['officeno'];
	$_SESSION['residenceno']=$_POST['residenceno'];
	$_SESSION['mobileno']=$_POST['mobileno'];
	$_SESSION['ename']=$_POST['ename'];
	$_SESSION['ecountry']=$_POST['ecountry'];
	$_SESSION['econtactno']=$_POST['econtactno'];
	$_SESSION['eemail']=$_POST['eemail'];
	$_SESSION['erelation']=$_POST['erelation'];
	$_SESSION['oldpassno']=$_POST['oldpassno'];
	$_SESSION['placeoi']=$_POST['placeoi'];
	$_SESSION['dateoi']=$_POST['dateoi'];
	$_SESSION['rereason']=$_POST['rereason'];
	if(isset($_POST['samepage2']))
		{
			$_SESSION['samepage2']=$_POST['samepage2'];
			
			if($_SESSION['samepage2']=="present")
			{
				$_SESSION['evillage']=$_SESSION['village'];
				$_SESSION['eroad']=$_SESSION['road'];
				$_SESSION['edistrict']=$_SESSION['district'];
				$_SESSION['epolicestation']=$_SESSION['policestation'];
				$_SESSION['epostoffice']=$_SESSION['postoffice'];
			}
			else
			{
				$_SESSION['evillage']=$_SESSION['pvillage'];
				$_SESSION['eroad']=$_SESSION['proad'];
				$_SESSION['edistrict']=$_SESSION['pdistrict'];
				$_SESSION['epolicestation']=$_SESSION['ppolicestation'];
				$_SESSION['epostoffice']=$_SESSION['ppostoffice'];
			}
		}
	else
		{
			$_SESSION['evillage']=$_POST['evillage'];
			$_SESSION['eroad']=$_POST['eroad'];
			$_SESSION['edistrict']=$_POST['edistrict'];
			$_SESSION['epolicestation']=$_POST['epolicestation'];
			$_SESSION['epostoffice']=$_POST['epostoffice'];
		}
		
}
?>

<!DOCTYPE html>
<html>
	<head>
		<style>
			select{width:40%;}
		</style>
		<title>Registration p3</title>
	</head>
		<body align="center">
			<form name="page3" action="final.php" method="post">
				<table align="center" border="0" style="width:60%;border-collapse: collapse">
					<tr colspan="2">
						<td align="left">
							<h3> PASSPORT APPLICATION - STAGE 3</h3>
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
											<tr align="left">
												<td colspan="2">
													<h4 align="left" style="color:green;"> Payment Information</h4>
												</td>
											</tr>
											<tr>
												<td><h6>Payment Type :</h6></td>
												<td align="left">
													<?php
														if(!isset($_SESSION['ptype']))
														{
															echo '<input type="radio" name="ptype" value="Online">Online<br>';
															echo '<input type="radio" name="ptype" value="Non-Online">Non-Online<br>';
														}
														else
														{
															if($_SESSION['ptype']=="Online")
															{
																echo '<input type="radio" name="ptype" value="Online" checked>Online<br>';
																echo '<input type="radio" name="ptype" value="Non-Online">Non-Online<br>';
															}
															else
															{
																echo '<input type="radio" name="ptype" value="Online">Online<br>';
																echo '<input type="radio" name="ptype" value="Non-Online" checked>Non-Online<br>';
															}
														}
													?>		
												</td>
											</tr>
											<tr>
											<?php
												if(!isset($_SESSION['currencyamount']))
													{
														echo '<td colspan="2" align="left"><h6><input type="checkbox" name="skippayment" value="true"> Skip Payment</h6></td>';
													}
													else{
															echo '<td colspan="2" align="left"><h6><input type="checkbox" name="skippayment" value="true" checked> Skip Payment</h6></td>';
														}
											?>
											</tr>
											<tr>
											<tr>
												<td><h6>Amount :<i style="color:red;">*</i></h6></td>
												<td align="left">
													<?php
														if(!isset($_SESSION['currency']))
														{
															echo '<select name="currency">';
																echo '<option value="BDT">BDT</option>';
																echo '<option value="Dollar">Dollar</option>';
																echo '<option value="other">other</option>';
															echo '</select>';
															echo '<input type="text" name="currencyamount" size="5">';
														}
														else
														{
															if($_SESSION['currency']=="Dollar")
															{
																echo '<select name="currency">';
																	echo '<option value="BDT">BDT</option>';
																	echo '<option value="Dollar" selected>Dollar</option>';
																	echo '<option value="other">other</option>';
																echo '</select>';
																if(!isset($_SESSION['currencyamount']))
																	{
																		echo '<input type="text" name="currencyamount" size="5">';
																	}
																	else{
																		echo '<input type="text" name="currencyamount" value="'.$_SESSION['currencyamount'].'" size="5">';
																	}
															}
															else if($_SESSION['currency']=="other")
															{
																echo '<select name="currency">';
																	echo '<option value="BDT">BDT</option>';
																	echo '<option value="Dollar">Dollar</option>';
																	echo '<option value="other" selected>other</option>';
																echo '</select>';
																if(!isset($_SESSION['currencyamount']))
																	{
																		echo '<input type="text" name="currencyamount" size="5">';
																	}
																	else{
																		echo '<input type="text" name="currencyamount" value="'.$_SESSION['currencyamount'].'" size="5">';
																	}
															}
															else
															{
																echo '<select name="currency">';
																	echo '<option value="BDT" selected>BDT</option>';
																	echo '<option value="Dollar" >Dollar</option>';
																	echo '<option value="other">other</option>';
																echo '</select>';
																if(!isset($_SESSION['currencyamount']))
																	{
																		echo '<input type="text" name="currencyamount" size="5">';
																	}
																	else{
																		echo '<input type="text" name="currencyamount" value="'.$_SESSION['currencyamount'].'" size="5">';
																	}
															}
														}
													?>
												</td>
											</tr>
											<tr>
											<?php
												if(!isset($_SESSION['dopayment']))
												{
													echo '<td><h6>Date of Payment:<i style="color:red;">*</i></h6></td><td align="left"><input type="text" name="dopayment" size="20" ></td>';
												}
												else{
													echo '<td><h6>Date of Payment:<i style="color:red;">*</i></h6></td><td align="left"><input type="text" name="dopayment" value="'.$_SESSION['dopayment'].'" size="20" ></td>';
												}
											?>
											</tr>
											<tr>
											<?php
												if(!isset($_SESSION['receiptno']))
												{
													echo '<td><h6>Receipt No :<i style="color:red;">*</i></h6></td><td align="left"><input type="text" name="receiptno" size="20"></td>';
												}
												else{
													echo '<td><h6>Receipt No :<i style="color:red;">*</i></h6></td><td align="left"><input type="text" name="receiptno" value="'.$_SESSION['receiptno'].'" size="20"></td>';
												}
											?>
											</tr>
											<tr>
												<td><h6>Name of Bank :</h6></td>
												<td align="left">
													<?php
														if(!isset($_SESSION['bankname']))
														{
															echo '<select name="bankname" >';
																echo '<option value="select">-SELECT-</option>';
																echo '<option value="DBBL">DBBL</option>';
																echo '<option value="SEB">SEB</option>';
																echo '<option value="DB">DB</option>';
															echo '</select>';
														}
														else
														{
															if($_SESSION['bankname']=="DBBL")
															{
																echo '<select name="bankname" >';
																	echo '<option value="DBBL" selected>DBBL</option>';
																	echo '<option value="SEB">SEB</option>';
																	echo '<option value="DB">DB</option>';
																echo '</select>';
															}
															else if($_SESSION['bankname']=="SEB")
															{
																echo '<select name="bankname" >';
																	echo '<option value="DBBL">DBBL</option>';
																	echo '<option value="SEB" selected>SEB</option>';
																	echo '<option value="DB">DB</option>';
																echo '</select>';
															}
															else if($_SESSION['bankname']=="DB")
															{
																echo '<select name="bankname" >';
																	echo '<option value="DBBL">DBBL</option>';
																	echo '<option value="SEB">SEB</option>';
																	echo '<option value="DB">DB</option>';
																echo '</select>';
															}
															else
															{
																echo '<select name="bankname" >';
																	echo '<option value="DBBL">DBBL</option>';
																	echo '<option value="SEB">SEB</option>';
																	echo '<option value="DB" selected>DB</option>';
																echo '</select>';
															}
														}
													?>
												</td>
											</tr>
											<tr>
												<td><h6>Name of Branch :</h6></td>
												<td align="left">
													<?php
														if(!isset($_SESSION['bankbranch']))
														{
															echo '<select name="bankbranch" >';
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
															if($_SESSION['bankbranch']=="Dhaka")
															{
																echo '<select name="bankbranch" >';
																	echo '<option value="Dhaka" selected>Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['bankbranch']=="Rangpur")
															{
																echo '<select name="bankbranch" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur" selected>Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['bankbranch']=="Sylhet")
															{
																echo '<select name="bankbranch" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet" selected>Sylhet</option>';
																	echo '<option value="Chittagong">Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['bankbranch']=="Chittagong")
															{
																echo '<select name="bankbranch" >';
																	echo '<option value="Dhaka">Dhaka</option>';
																	echo '<option value="Rangpur">Rangpur</option>';
																	echo '<option value="Sylhet">Sylhet</option>';
																	echo '<option value="Chittagong" selected>Chittagong</option>';
																	echo '<option value="Rajshahi">Rajshahi</option>';
																	echo '<option value="Barisal">Barisal</option>';
																echo '</select>';
															}
															else if($_SESSION['bankbranch']=="Rajshahi")
															{
																echo '<select name="bankbranch" >';
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
																echo '<select name="bankbranch" >';
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
							</table>
						</td>
					</tr>
					<tr>
						<td align="right" colspan="2">
							<a href="page2.php"><button type="button">PREVIOUS PAGE</button></a>
							<input type="submit" value="Save & NEXT">
						</td>
					</tr>
				</table>
			</form>	
		</body>
</html>