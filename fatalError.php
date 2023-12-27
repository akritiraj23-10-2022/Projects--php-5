<?php
	// Calling undefined function to see fatal error

		error_reporting(E_ALL);
  		ini_set("display_errors", "on");

		echo "Line Before calling function functionData()";
		echo "<BR />";	
	// Calling undefined function to see fatal error
		functionData();
		echo "Line After calling function functionData()";
	?>
