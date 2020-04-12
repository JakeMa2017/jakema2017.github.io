<?php include "base.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<script src="js/utility.js" type="text/javascript"></script>
	<?php
 		if(!empty($_POST['taskdetail']))
  		{	
   			foreach($_POST['taskdetail'] as $taskid)
    		{
				$sql_cmd = "Delete from tblToDoList where taskid=" .$taskid;
				$dbh->exec($sql_cmd);
   			}
   		}
	?>
</head>
<body onload="ShowInsertTask(1);">
	<!-- The code below will add the html controls in the page to add the "to do list"-->
<h1><small>Add new Task</small></h1>
<form action="" id="frmTask">
	<div class="form-group">
		<div>
			<label  for="lblName">Task Name *</label>
		</div>
		<div >
			<input class="form-control" type="text" id="txtName" placeholder="Enter task name" required>
		</div>
	</div>
	<div class="form-group">
		<div >
			<label for="lblDate">Date *</label>
		</div>
		<div>
			<input type="text" class="form-control" id="txtDate" placeholder="mmddyyyy" required>
		</div>
	</div>
	<div class="form-group">
		<div>
			<label for="lblDesc">Description</label>
		</div>
		<div>
			<input type="text" class="form-control" id="txtDesc" >
		</div>
	</div>
	<div class="form-group">
		<div>
			<label for="lblPriority">Priority</label>
		</div>
		<div >
		<select id = "ddlPriority" class="form-control" >
		<option value = "1" selected>1</option>
		<option value = "2">2</option>
		<option value = "3">3</option>
		<option value = "4">4</option>
		<option value = "5">5</option>
		<option value = "6">6</option>
		<option value = "7">7</option>
		<option value = "8">8</option>
		<option value = "9">9</option>
		<option value = "10">10</option>
		</select>
		</div>
	</div>
		<div>
			<div class="form-group">
				<div>
					<label for="lblStatus">Status:</label></div>
				<div>
					<select id = "ddlStatus" class="form-control" >
						<option value = "Completed">Completed</option>
						<option value = "In Progress">In Progress</option>
					    <option value = "Not Yet Started">Not Yet Started</option>
					</select>
				</div>
			</div>
			<br>
			<div>
				<button type="button" class="btn btn-primary" onclick="ShowInsertTask(2)">Add Task</button>
			</div>
		</div>
</form>

	<br>

	<div>
	 	<div><h4 class="d-inline-block">To do List</h4></div>
	 	<div>
			<button class="btn btn-sm btn-danger" type="submit" onclick="RemoveData(3);">Delete List</button>
		</div>
	</div>
	<div>
		<form action=" todolistpage.php" method="post">
			<div class="pt-1">
		 		<table id ="tblToDoList" >
					<thead>
						<tr style="background-color: #d3edf8;">
						<th><button type="submit" class="btn">Delete </button></th>
						<th class="px-3">Task Name </th>
						<th class="px-3"> Date </th>
						<th class="px-3"> Priority </th>
						<th class="px-3"> Status </th>
						<th class="px-3"> Description </th>
						</tr>
					</thead>
					<tbody id="tblData">
										
					</tbody>
				</table>
			</div>
		</form>
	</div>

	<!--This function add the task details in database by calling InsertDisplayTask function,which is written in a utility .js file (javascript file) -->

<script type="text/javascript">
 //<![CDATA[

function ShowInsertTask(opId)
  
{
			
  var sTaskName = document.getElementById("txtName").value;
  var dDate = document.getElementById("txtDate").value;
  var sDescription = document.getElementById("txtDesc").value;
  var iPriority= document.getElementById("ddlPriority").value;
  var sStatus = document.getElementById("ddlStatus").value;

 // check taskname and date should not be blank
  if(opId == 2)
   {
 	if(sTaskName == "" || dDate == "")
 	{
  		alert("date and task name are mandatory, please fill those!!");
 	       if(sTaskName == "")
			document.getElementById("txtName").focus();
		  else
			document.getElementById("txtDate").focus();
  		return false;
	}
   }
			
 InsertDisplayTask(opId,sTaskName, dDate, sDescription,iPriority, sStatus);
}

// This function remove all the tasks from the database by calling the same InsertDisplayTask function, which is written in an utility.js file
function RemoveData(opId)
{
   var vResponse= confirm("Are you sure you want to delete the list?");
   if(vResponse == true)
   {
	var sTaskName = "";
	var dDate = "";
	var sDescription = "";
	var iPriority = 0;
	var sStatus = "";
	InsertDisplayTask(opId,sTaskName, dDate, sDescription,iPriority, sStatus);
		
    }		
 }
//]]>
</script>
</body>
</html>