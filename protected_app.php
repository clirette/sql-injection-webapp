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
		try {
			$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$item = $_GET['search'];
	
			$stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE :item");
			$stmt->bindParam(':item', $item);
			$stmt->execute();
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo '<table class="table table-striped table-bordered table-hover">'; 
			echo "<tr><th>Name</th><th>Description</th><th>Cost</th><th>Availability</th></tr>"; 
			
			foreach($results as $row) {
				echo "<tr>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['description']."</td>";
				echo "<td>".$row['price']."</td>";
				echo "<td>".$row['availability']."</td>";
				echo "</tr>";
			}
			echo "</table>";
			
		} catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
    	$conn = null;
    }
	?>

</body>
</html>
