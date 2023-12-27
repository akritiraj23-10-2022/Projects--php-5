<?php
	error_reporting(E_ALL & ~E_NOTICE);
?>
<!-- -->
<html>
	<head>
		<title>Product Master</title>
	</head>
	<body style="font-family:georgia;">
		<center>
			<fieldset style="width:40%">
				<legend style="font-weight:bold; font-family:georgia; font-size:12px; color:blue;">Product Details:</legend>
					<form action="prodForm2.php" method="post" name="frmProdInfor"> 
						<table id="tableForm" border="0" bgcolor="#ffffff" cellpadding="4" cellspacing="6" width="100%" align="center">
							<tr>
								<td colspan="2" style="color:#FF0000;"><?php echo $alertmessage?></td>
							</tr>
							<tr>
								<td align="right" width="50%"> Product ID:</td>
								<td><input name="txtProdID" type="text" value="<?php echo $_POST['txtProdID'];?>" size="20" /></td>
							</tr>
							<tr>
								<td align="right" width="50%"> Product Name: </td>
								<td><input name="txtProdName" type="text" value="<?php echo $_POST['txtProdName'];?>" size="20" /></td>
							</tr>
							<tr>
								<td align="right" width="50%"> Product Price :&nbsp;</td>
								<td><input name="txtProdPrice" type="text" value="<?php echo $_POST['txtProdPrice'];?>" size="20" /></td>
							</tr>
							<tr><td align="right" width="50%">&nbsp; </td>
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