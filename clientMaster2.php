<?php
	error_reporting(E_ALL & ~E_NOTICE);

?>
	<html>
	<head>
	<title>Client's Details</title>
	</head>
		<body style="font-family:georgia;">
			<center>
				<fieldset style="width:50%">
					<legend style="font-weight:bold; font-family:georgia; font-size:12px;">Client's Details:</legend>
						<form action="clientForm2.php" method="post" name="frmClientInfo"> 
							
							<table id="tableForm" border="0" bgcolor="#ffffff" cellpadding="4" cellspacing="6" width="100%" align="right">
								<tr>
									<td colspan="2" style="color:#FF0000;"><?php echo $alertmessage?></td>
								</tr>
								<tr>
									<td colspan="2"><center>Please enter the information to get access to the resources available<br></center></td>
								</tr>
								<tr>
									<td align="right" width="30%"> Client Name:	</td>
									<td><input name="txtName" type="text" value="<?php echo $_POST['txtName'];?>" size="50" /></td>
								</tr>
								<tr>
									<td></td>
									<td>(Format: <strong>Surname</strong>[:SPACE:] <strong>Name</strong>[:SPACE:] <strong>Second/Middle Name</strong>)</td>
								</tr>
								<tr>
									<td align="right" width="30%"> Email ID: </td>
									<td><input name="txtEmail" type="text" value="<?php echo $_POST['txtEmail'];?>" size="50" /></td>
								</tr>
								<tr>
									<td></td>
									<td>(Format: <strong>emailID</strong>[@] <strong>Domain Name</strong>)</td>
								</tr>
								<tr>
									<td align="right" width="30%"> Telephone:&nbsp;</td>
									<td><input name="txtPhone" type="text" value="<?php echo $_POST['txtPhone'];?>" size="50" /></td>
								</tr>
								<tr>
									<td></td>
									<td>(Format: <strong>Only Numeric values are allowed</strong>)</td>
								</tr>
								<tr><td align="right" width="30%">&nbsp; </td>
									<td>
										<input name="cmdSubmit" type="submit" value="Submit">&nbsp;
										<input name="cmdReset" type="reset" value="Cancel">
									</td>
								</tr>
						</table>
						</form>
				</fieldset>
			</center>
		</body>
	</html>