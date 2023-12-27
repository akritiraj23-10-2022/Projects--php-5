<?php
		/* Using trigger_error() function */
		$divisor = 0;
		if ($divisor == 0)
		{
			trigger_error("Cannot divide by zero", E_USER_ERROR);
		}
	?>
