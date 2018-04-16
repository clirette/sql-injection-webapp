<!DOCTYPE html>
<html>
<head>
	<title>Hardware Store</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Katie's Hardware</h1>
	<form action="" method="GET">
		<input type="text" name="search">
		<input type="submit" name="submit" value="Search">
	</form>
	<?php
	if (isset($_GET['search'])) {
		$host = "localhost";
		$db = "hardware_store";
		$user = "root";
		$pwd = "ch@ng3dt00r";
		$link = new mysqli($host, $user, $pwd, $db);
		if ($link->connect_error) {
			die("Connection failed: " . $link->connect_error);
		}
		$item = $_GET['search'];
		$query = "SELECT * FROM products WHERE name LIKE '%$item%'";
		$results = mysqli_query($link, $query);
		// if ($results->num_rows === 0) {
		// 	echo "<p>No results found</p>"
		// }
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
	}	
	?>

</body>
</html>
