<!DOCTYPE html>
<html>
<head>
	<title>Form Example</title>
</head>
<body>
	<h1>Enter Your Information</h1>
	<form method="post" action="process.php">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="number">Phone Number:</label>
		<input type="tel" id="number" name="number" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
