<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<h1>User List</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
		<?php
			// Database credentials
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "form";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}

			// Query database for user data
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql);

			// Loop through results and display data in table
			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    echo "<tr>";
			    echo "<td>" . $row["name"] . "</td>";
			    echo "<td>" . $row["email"] . "</td>";
			    echo "<td>" . $row["number"] . "</td>";
			    echo "<td>" . $row["password"] . "</td>";
			    echo "<td>";
			    echo "<form method='post' action='edit.php'>";
			    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
			    echo "<input type='submit' value='Edit'>";
			    echo "</form>";
			    echo "<form method='post' action='delete.php'>";
			    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
			    echo "<input type='submit' value='Delete'>";
			    echo "</form>";
			    echo "</td>";
			    echo "</tr>";
			  }
			} else {
			  echo "No users found";
			}

			mysqli_close($conn);
		?>
	</table>
</body>
</html>

