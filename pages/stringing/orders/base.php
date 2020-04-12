<?php
/* This code is used to see the available driversforeach(PDO::getAvailableDrivers() as $driver){echo $driver.'<br />';}*/
	try
	{
		$dbh = new PDO("sqlite:orders.db");
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

?>