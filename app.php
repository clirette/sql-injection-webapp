<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
	<h1>Katie's Hardware</h1>
	<form>
		<input type="text" name="search">
		<input type="submit" name="submit" value="Search">
	</form>
	<?php	
	$host = "localhost";
	$db = "hardware_store";
	$user = "root";
	$pwd = "mysqlt00r";
	$link = new mysqli($host, $user, $pwd, $db);
	if ($link->connect_error) {
		die("Connection failed: " . $link->connect_error);
	}
	$query = "SELECT * FROM products";
	$results = mysqli_query($link, $query);
	while($row = mysqli_fetch_array($results))
	{
		echo '<table class="table table-striped table-bordered table-hover">'; 
		echo "<tr><th>Name</th><th>Description</th><th>Cost</th><th>Availability</th></tr>"; 
		while($row = mysqli_fetch_array($results))
		{
		  echo "<tr><td>"; 
		  echo $row['name'];
		  echo "</td><td>";   
		  echo $row['description'];
		  echo "</td><td>";
		  echo $row['price'];
		  echo "</td><td>";    
		  echo $row['availability'];
		  echo "</td></tr>";  
		}
		echo "</table>"; 
	}
	?>

</body>
</html>
