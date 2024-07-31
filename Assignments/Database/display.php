<!DOCTYPE html>
<html>
<center>
<head>
	
	<h3>database display</h3>
</head>
<body bgcolor="brown">

<table border="1">
	<tr>
		<th>ID</th><th>NAME</th><th>QUALIFICATION</th><th>SALARY</th><th>DESIGNATION</th><th>ADDRESS</th>
	</tr>

		<?php

			include "database.php";
			//to display all content
			 $result=$con->query("SELECT * FROM `data` ");

			//to display data where name start as R
			// $result=$con->query("SELECT * FROM `data` WHERE name LIKE 'R%' ");

			//where designation=manager
			// $result=$con->query("SELECT * FROM `data` WHERE designation='manager' ");

			//delete whose salary<10000
			// $result=$con->query(" DELETE FROM `data` WHERE salary<'10000' ");

			//update of name
			// $result=$con->query(" UPDATE `data` SET name='raghu' WHERE empid=101");

			if($result->num_rows>0)
			{
				while($rows=$result->fetch_assoc())
				{
					?>
					<tr>
						<td><?php echo $rows["empid"];?></td>
						<td><?php echo $rows["name"];?></td>
						<td><?php echo $rows["qualification"];?></td>
						<td><?php echo $rows["salary"];?></td>
						<td><?php echo $rows["designation"];?></td>
						<td><?php echo $rows["address"];?></td>
					</tr>
			<?php
				}
			}

		?>
</center>
</table>
</body>
</html>