<html lang="en">
<head>
	<style>
	tr,td{
		padding:1em;
	}
	</style>
</head>
<body>
<?php
	$con=Mysqli_Connect("localhost","root","","aswathy");
	if(!$con){
		echo "Connection error!";
	}
	else{
		$query="select * from table1";
		$values=mysqli_query($con,$query);
		echo '<table border="1" style="margin-left:auto;margin-right:auto;margin-top:3cm;border-collapse:collapse;">
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone no</th>';
		if(mysqli_num_rows($values)){
			while($row=mysqli_fetch_assoc($values)){
				echo '<tr>';
					echo '<td>';
						echo $row["name"];
					echo '</td>';
					echo '<td>';
						echo $row["email"];
					echo '</td>';
					echo '<td>';
						echo $row["password"];
					echo '</td>';
					echo '<td>';
						echo $row["phone number"];
					echo '</td>';
				echo '</tr>';
		}
	}
	else{
		echo "error".$query.mysqli_error($con);
	}
}
?>
</body>
</html>
