<?php 
	$command = $_POST["command"];
	if($command == 'create') //insert into the table
	{
		$sName=  $_REQUEST['tname'];
		$dDate= $_REQUEST['dDate'];
		$sDesc= $_REQUEST['desc'];
		$iPriority= $_REQUEST['priority'];
		$sStatus= $_REQUEST['status'];
		//insert into table
		$sql_cmd = "INSERT INTO orders(firstname, lastname, email, racketModel, racketColor, stringType, stringTension, message, receivedDate, note, status, myMessage) VALUES('$sName','$dDate','$sDesc','$iPriority','$sStatus')";
		$dbh->exec($sql_cmd);
	}

	if($iOpId == 3) //delete the table data
	{
		$sql_cmd = "DELETE FROM orders";
		$dbh-> exec($sql_cmd);
	}

	// show the content of the table
	$sql = "SELECT taskid, firstname, lastname, email, racketModel, racketColor, stringType, stringTension, message, receivedDate, note, status, myMessage FROM orders ORDER BY taskid DESC";
    foreach ($dbh->query($sql) as $row)
    {
      echo "<tr>";
      echo "<td><input type=checkbox name='taskdetail[" .$row['taskid']. "]' value=" . $row['taskid']. "></td>";
      echo "<td>" . $row['firstname']. "</td>";
      echo "<td>" . $row['lastname']. "</td>";
      echo "<td>" . $row['email']. "</td>";
      echo "<td>" . $row['racketModel']. "</td>";
      echo "<td>" . $row['racketColor']. "</td>";
      echo "<td>" . $row['stringType']. "</td>";
      echo "<td>" . $row['stringTension']. "</td>";
      echo "<td>" . $row['message']. "</td>";
      echo "<td>" . $row['note']. "</td>";
      echo "<td>" . $row['status']. "</td>";
      echo "<td>" . $row['myMessage']. "</td>";
    }
?>