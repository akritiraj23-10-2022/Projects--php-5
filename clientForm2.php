	<?php
	/*
		Date			:-   04/10/09
		Client		:-  Ivan Bayross
		Filename	:-  clientForm2.php
		Purpose		:-  Validates and displays Clients's data like name, email id, address and telephone no using regular expressions.
	*/

	/* A variable holding the developers name. */
		$author = 'Ivan Bayross';

	/* Storing the system date in the format 1st Jan, 2009. */
		$sysdt = date("jS M, Y");

	/* Storing the system time in the format 00:00. */
		$systm = date("H:i");

	/* Checking if the variable for Client's name is empty, (i.e. a blank name field was submitted). */ 
		if(empty($_POST['txtName']))
		{
		/* Returning to the data entry form if the clients name is empty. */
			$alertmessage = '<center>Field for Client\'s Name is empty!</center>';
			include ("clientMaster2.php");
			exit;
		}
	/* When the client's name is submitted. */
		else
		{
		/* Using regular expressions with the ereg() function, to identify an occurrence of double spaces in the Client's name. */
			if(ereg("([[:space:]]){2}", $_POST['txtName']))
			{
	 		/* Returning to the data entry form, if the client's name contains double spaces. */
				$alertmessage = '<center>Double spaces found in Client\'s Name</center>';
				include ("clientMaster2.php");
				exit;
			}
		}

 
	/* Checking if the variable for Client's Email Id is empty, (i.e. a blank Email id field was submitted). */ 
		if(empty($_POST['txtEmail']))
		{
		/* Returning to the data entry form, if the client's email id is empty. */
			$alertmessage = '<center>Field for Client\'s email id is empty! </center>';
			include ("clientMaster2.php");
			exit;
		}
	/* When the Client's email id is submitted. */
		else
		{
		/* Returning to the data entry form, if the format for the Client's email id is not as specified in the data entry form. */
			$regex = '/^([a-zA-Z0-9_\.\-\_])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
			if(!preg_match($regex,$_POST['txtEmail']))
			{
				$alertmessage = '<center>Invalid Client\'s email id !</center>';
				include ("clientMaster2.php");
				exit;
			}
		}

	/* Checking if the variable for Client's Telephone no is empty, (i.e. a blank specialit field was submitted). */ 
		if(empty($_POST['txtPhone']))
		{
		/* Returning to the data entry form, if the Client's Telephone no is empty. */
			$alertmessage = '<center>Field for Client\'s telephone is empty! </center>';
			include ("clientMaster2.php");
			exit;
		}
		else
		{
			$regex = '/[0123456789]/' ;
			if(!preg_match($regex,$_POST['txtPhone']))
			{
				$alertmessage = '<center>Invalid Client\'s telephone number!</center>';
				include ("clientMaster2.php");
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
			<H4>Details Submitted As On:</H4>
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
		<?php
		/* Using the split() function to extract Client's last name, first name and second name into variables $lname, $fname and $mname respectively. */
			list($lname, $fname, $mname) = split(" ", $_POST['txtName'], 3);
		?>

			<H4>Client's Name:</H4>
			<TABLE BORDER="1" CELLSPACING="1" WIDTH="500">
				<TR>
					<TD ALIGN="center" WIDTH="150"><?php echo $lname; ?></TD>
					<TD ALIGN="center" WIDTH="150"><?php echo $fname; ?></TD>
					<TD ALIGN="center" WIDTH="200"><?php echo $mname; ?></TD>
				</TR>
				<TR>
					<TD ALIGN="center" WIDTH="150">Surname</TD>
					<TD ALIGN="center" WIDTH="150">First Name</TD>
					<TD ALIGN="center" WIDTH="150">Second/Middle Name</TD>
				</TR>
			</TABLE>
			<HR>

			<H4>Email ID:</H4>
			<TABLE BORDER="0" CELLSPACING="1" WIDTH="300">
				<TR>
					<TD ALIGN="left" WIDTH="150"><?php echo $_POST['txtEmail']; ?></TD>
				</TR>
			</TABLE>
			<HR>

			<H4>Telephone:</H4>
			<TABLE BORDER="0" CELLSPACING="1" WIDTH="400">


				<TR>
					<TD ALIGN="left" WIDTH="150"><?php echo  $_POST['txtPhone']?></TD>
				</TR>
			</TABLE>
			<HR>
 
		

		</body>
	</HTML>
