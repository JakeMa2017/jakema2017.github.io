<?php include "base.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title> Manju Pant </title>
</head>
<body>
<?php 
$iOpId = $_POST["opId"];
if($iOpId == 2) //insert into the table also
{
	$sName=  $_REQUEST['tname']; //'ddd_123_test';
	$dDate= $_REQUEST['dDate']; //'cccc';
	$sDesc= $_REQUEST['desc']; //'ddddd';
	$iPriority= $_REQUEST['priority']; //'eeeee';
	$sStatus= $_REQUEST['status']; //'fwfee'; 
		//insert into table
$sql_cmd = "INSERT INTO tblToDoList(taskname,taskdate, taskdesc, priority ,status)values('$sName','$dDate','$sDesc','$iPriority','$sStatus')";
	$dbh->exec($sql_cmd);
  }



if($iOpId == 3) //delete the table data
{
	$sql_cmd = "DELETE FROM tblToDoList";
	$dbh-> exec($sql_cmd);
}

 // show the content of the table
$sql = "select taskid, taskname,taskdate,taskdesc,priority,status from tblToDoList order by taskid desc";
    foreach ($dbh->query($sql) as $row)
     {
  	echo "<tr>";
echo "<td><input type=checkbox name='taskdetail[" .$row['taskid']. "]' value=" . $row['taskid']. "></td>";
	echo "<td>" . $row['taskname']. "</td>";
	echo "<td>" . $row['taskdate']. "</td>";
	echo "<td>" . $row['priority']. "</td>";
	echo "<td>" . $row['status']. "</td>";
	echo "<td>" . $row['taskdesc']. "</td></tr>";       		
 }
?>
</body>
</html>