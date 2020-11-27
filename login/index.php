<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
	<style type="text/css">
		fieldset{
			width: 50%;
			margin: auto;
			background-color: gray;
			padding: 20px;
		}
		legend{
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<form method="POST" action="../app/authController.php">
			<fieldset>
			<legend>
				Access in your account
			</legend>

			<label>
				Email
			</label>
			<input type="email" name="email" required="">

			<br>

			<label>
				Password
			</label>
			<input type="password" name="password" required="">

			<br>

			<button type="submit">
				Access
			</button>

			</fieldset>

			<input type="hidden" name="action" value="login">
		</form>
		
		<form method="POST" action="../app/authController.php">
			<fieldset>
			<legend>
				Register
			</legend>

			<label>Name</label>

			<input type="text" name="name" required="">

			<br>

			<label>Email</label>

			<input type="email" name="email" required="">

			<br>

			<label>Password</label>

			<input type="password" name="password" required="">

			<br>

			<button type="submit">
				Enviar
			</button>

			<input type="hidden" name="action" value="register">

		</fieldset>
		</form>
		

	</center>
</body>
</html>