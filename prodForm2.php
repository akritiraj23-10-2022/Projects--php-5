	<?php
	/*
		Date			:-   04/10/09
		Client		:-  Ivan Bayross
		Filename	:-  prodForm2.php
		Purpose		:-  Validates and displays product details using regular expressions.
	*/

	/* A variable holding the developers name. */
		$author = 'Ivan Bayross';

	/* Storing the system date in the format 1st Jan, 2009. */
		$sysdt = date("jS M, Y");

	/* Storing the system time in the format 00:00. */
		$systm = date("H:i");

 	/* Checking if the variable for Product ID no is empty, (i.e. a blank specialit field was submitted). */ 
		if(empty($_POST['txtProdID']))
		{
		/* Returning to the data entry form, if the Product ID is empty. */
			$alertmessage = '<center>Product ID is empty! </center>';
			include ("productMaster2.php");
			exit;
		}
		else
		{
			$regex = '/[0123456789]/' ;
			if(!preg_match($regex,$_POST['txtProdID']))
			{
				$alertmessage = '<center>Invalid Product ID!</center>';
				include ("productMaster2.php");
			exit;
			}
		}

/* Checking if the variable for Product's name is empty, (i.e. a blank name field was submitted). */ 
		if(empty($_POST['txtProdName']))
		{
		/* Returning to the data entry form if the product name is empty. */
			$alertmessage = '<center>Product Name is empty!</center>';
			include ("productMaster2.php");
			exit;
		}
	/* When the Product's name is submitted. */
		else
		{
		/* Using regular expressions with the ereg() function, to identify an occurrence of double spaces in the product name. */
			if(ereg("([[:space:]]){2}", $_POST['txtProdName']))
			{
	 		/* Returning to the data entry form, if the product name contains double spaces. */
				$alertmessage = '<center>Double spaces found in Product Name</center>';
				include ("productMaster2.php");
				exit;
			}
		}

/* Checking if the variable for Prodcut Price no is empty, (i.e. a blank specialit field was submitted). */ 
		if(empty($_POST['txtProdPrice']))
		{
		     /* Returning to the data entry form, if the Product Price is empty. */
			$alertmessage = '<center>Prodcut Price is empty! </center>';
			include ("productMaster2.php");
			exit;
		}
		else
		{
			$regex = '/[0123456789]/' ;
			if(!preg_match($regex,$_POST['txtProdPrice']))
			{
				$alertmessage = '<center>Invalid Product Price!</center>';
				include ("productMaster2.php");
			    exit;
			}
		}

	?>

	<html>
		<head>
			<title>Result after using Regular Expression</title>
			<style>
				#tableForm{font-size:12px;}
				input{font-family:georgia;}
			</style>
		</head>
		<body style="font-family:georgia;">
			<H4>Product Details Submitted As On:</H4>
			<table border="1" cellspacing="1" width="250">
				<tr>
				<td align="right" width="100">Server Date :</td>
				<td align="left" width="100">
					<?php echo $sysdt; ?> </td>
				</tr>

				<tr>
		 		<td align="right" width="100">Server Time :</td>
				<td align="left" width="100">
				<?php echo $systm; ?> </td>
				</tr>
			</table><hr>
		
			<H4>Product ID:</H4>
			<TABLE BORDER="0" CELLSPACING="1" WIDTH="300">
				<TR>
					<TD ALIGN="left" WIDTH="150"><?php echo $_POST['txtProdID']; ?></TD>
				</TR>
			</TABLE>
			<HR>

			<H4>Product Name:</H4>
			<TABLE BORDER="0" CELLSPACING="1" WIDTH="400">
				<TR>
					<TD ALIGN="left" WIDTH="150"><?php echo  $_POST['txtProdName']?></TD>
				</TR>
			</TABLE>
			<HR>
 
			<H4>Product Price:</H4>
			<TABLE BORDER="0" CELLSPACING="1" WIDTH="400">
				<TR>
					<TD ALIGN="left" WIDTH="150"><?php echo  $_POST['txtProdPrice']?></TD>
				</TR>
			</TABLE>
			<HR>

		</body>
	</HTML>
