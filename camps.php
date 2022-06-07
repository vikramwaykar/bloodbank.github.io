<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/camps.css">
<title>Camps</title>
</head>

<body>

<div>
<?php 
include 'database.php';
session_start();
	echo"<a href='index.php'>Back to home</a>";
echo "<h1 style=position:relative;>Ongoing/ Upcoaming Camps</h1>";
$statement = "select * from camps;";
$result = pg_query($conn, $statement);
if(pg_num_rows($result)>0)
{
	while($rows = pg_fetch_assoc($result))
	{
		echo "<table style=position:relative;width:25cm;>";
		echo "<tr>";
		echo "<th>Name Of Camp</th>";
		echo "<th>Address</th>";
		echo "<th>City</th>";
		echo "<th>Time</th>";
		echo "<th>Date</th>";
		echo "</tr>";
		echo "<tr style=position:relative;width:25cm;>";
		$name = $rows['name'];
		echo "<td>$name</td>";
		echo "<br>";
		$address = $rows['address'];
		echo "<td>$address</td>";
		echo "<br>";
		$city = $rows['city'];
		echo "<td>$city</td>";
		echo "<br>";
		$time = $rows['time_e'];
		echo "<td>$time</td>";
		echo "<br>";
		$date = $rows['date_e'];
		echo "<td>$date</td>";
		echo "<br>";
		echo "</td>";
		echo "</table>";
	}

}
else
{
	echo "There Is No On Going Camps";

}

?>
</div>
</body>
</html>
