<?php 
include_once('ilpAdminTable.php'); 
$query="select * from studreg"; 
//$result=mysql_query($query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="6"><h2>Student Record</h2></th> 
		</tr> 
			  <th> ID </th> 
			  <th> Name </th> 
			  <th> Email </th> 
			  <th> Phone </th> 
			  <th> Address </th> 
			  <th> Program </th> 
			  
		</tr> 
		
		<?php 
		//while($rows=mysql_fetch_assoc($result)) 
		{ 

		?> 
		<tr> <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['email']; ?></td> 
		<td><?php echo $rows['phone']; ?></td> 
		<td><?php echo $rows['address']; ?></td> 
		<td><?php echo $rows['program']; ?></td> 
		</tr> 
	<?php 
	               } 
          ?> 

	</table> 
	</body> 
	</html>