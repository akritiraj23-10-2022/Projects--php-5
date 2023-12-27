<?php
	/* Using Exceptions */

		try
		{
			$number = 70;
			if ($number < 50)
			{
				throw new Exception("Value is lesser than 50");
			}
			$message1 = "Value is Correct";
			print $message1;
		}
		catch(Exception $exception)
		{
			print "Value must be greater than 50";
		}

	?>
