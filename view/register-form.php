<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		require_once(__DIR__ . "/../model/config.php");
	?>
	<br>
	<br>
	<h1>登録<br>Tōroku</h1>


	<form method="post" action="<?php echo $path . "controller/create-user.php" ; ?>">
	<!--  -->
		<div>
			<label for="username">Username:</label>
			<input type="text" name="username" />
		</div>
		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" />
		</div>

		<div>
			<button type="submit">CLICK THE BUTTON!!!</button>
		</div>
	</form>
	</body>
	</html>