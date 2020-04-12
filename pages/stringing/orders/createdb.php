<?php include "base.php"; ?>
<?php
	try
	{
		$create_table_command = 'CREATE TABLE orders(taskid integer primary key NOT NULL AUTO_INCREMENT, firstName varchar(30), lastName varchar(30), email varchar(20), racketModel varchar(20), racketColor varchar(20), stringType varchar(20), stringTension integer, message varchar(300), receivedDate varchar(20), note varchar(300), status integer, myMessage varchar(200)';
		$dbh->exec($create_table_command);
		echo "<br />" . $create_table_command ."\n";
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>