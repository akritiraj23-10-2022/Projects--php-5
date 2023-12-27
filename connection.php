	<?php
		$user="root";
		$pwd="sct2306";
		$db="learn";
		$host="localhost";
		$link= @mysql_connect($host, $user, $pwd);
 
		try
		{
			if (!$link)
			{
				throw new exception("MyException");
			}
			echo "MySQL Connection Established!";
		}
		catch(Exception $connection)
		{
			print "Connection Failed!";
		}

		echo "<BR>";
		$db_link=@mysql_select_db($db);

		try
		{
			If (!$db_link)
			{
				throw new exception("Database does not exists!");
			}
			echo "Database ". $db . " Exists!";
			mysql_close();
		}

		catch(Exception $database)
		{
			print "Could not select the database!";
		}

	?>
