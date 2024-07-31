<!DOCTYPE html>
<html>
<center>
<head>
	
	<h3>database display</h3>
</head>
<body bgcolor="yellow">

<table border="1">
	<tr>
		<th>NAME</th><th>PHONENO</th><th>ADDRESS</th><th>REVIEW</th><th>SPECIAL DISH</th><th>FOOD TYPE</th>
	</tr>

		<?php

			include "database2.php";
			//to display all content
			$result=$con->query("SELECT * FROM `info` ");

			//to display first 5 records
			//$result=$con->query("SELECT * FROM `info` LIMIT 5 ");

			//last 2 records
			//$result=$con->query("SELECT * FROM `info` ORDER BY name DESC LIMIT 2 ");

			//city=pune
			//$result=$con->query(" SELECT * FROM `info` WHERE address='pune' ");

			//review=bad
			//$result=$con->query(" SELECT * FROM `info` WHERE review='bad' ");

			//special dish != vadapav
			//$result=$con->query(" SELECT * FROM `info` WHERE NOT spedish='vadapav' ");

			if($result->num_rows>0)
			{
				while($rows=$result->fetch_assoc())
				{
					?>
					<tr>
						<td><?php echo $rows["name"];?></td>
						<td><?php echo $rows["phoneno"];?></td>
						<td><?php echo $rows["address"];?></td>
						<td><?php echo $rows["review"];?></td>
						<td><?php echo $rows["spedish"];?></td>
						<td><?php echo $rows["foodtype"];?></td>
					</tr>
			<?php
				}
			}

		?>
</center>
</table>
</body>
</html>