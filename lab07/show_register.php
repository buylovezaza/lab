<html>
<head>
	<title>Show Register</title>
	<meta charset="utf-8">
	
</head>
<body>
<center>
<h3><i><u>Show Register</u></i></h3>
<table border="1" bordercolor="pink">
	<tr bgcolor="#FF0099">
		<td>Number</td>
		<td>Name-Lastname</td>
		<td>Email</td>
		<td>Sex</td>
		<td>Favorite</td>
		<td>Address</td>
		<td>City</td>
	</tr>
	<?php
		include('db.php');
		$sql = "SELECT reg_id,reg_name,reg_email,reg_sex,reg_fav,reg_address,PROVINCE_NAME FROM provinces INNER JOIN Reg ON provinces.PROVINCE_ID=Reg.pro_id";
		$result = $con->query($sql);
		while ($row = $result->fetch_array()) {

			echo "<tr>";
			echo "<td>" . $row['reg_id'] . "</td>";
			echo "<td>" . $row['reg_name'] . "</td>";
			echo "<td>" . $row['reg_email'] . "</td>";
			echo "<td>" . $row['reg_sex'] . "</td>";
			echo "<td>" . $row['reg_intr'] . "</td>";
			echo "<td>" . $row['reg_address'] . "</td>";
			echo "<td>" . $row['PROVINCE_NAME'] . "</td>";
			echo "</tr>";

		}
	?>
</table>
</center>

</body>
</html>