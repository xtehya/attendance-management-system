<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel='stylesheet' href='style.css'/>
	</head>
	<body>

		<div class="login">
			<h1> <br> Good day! Login here... <br> </h1>
			<form action="authenticate.php" method="post"> 
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Enter Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Enter Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>