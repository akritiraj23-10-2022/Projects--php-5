<?php
		$filename = "SQLData.php";
		if (is_file($filename))
		{
			print("file $filename does exist!");
		}
	     else
		{
			error_log("File does not exist!", 3, "D:/sct/error/errorlog.txt");
		}
	?>
