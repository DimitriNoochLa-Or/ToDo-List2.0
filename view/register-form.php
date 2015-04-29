<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		    require_once(__DIR__ . "/header.php");

		require_once(__DIR__ . "/../model/config.php");
	?>
	<br>
	<br>
	<div class="text-center">
	<h1>登録<br>Tōroku</h1>
	</div>


	<form method="post" action="<?php echo $path . "todo2.php" ; ?>">
	
		<div class="fonttext2 text-center">
			<label  for="username">
			<i class="icon-user"></i> Username:
			</label>
			<input class="fonttext" type="text" name="username" />
		</div>
		<div class="fonttext2 text-center">
			<label  for="password">Password:</label>
			<input  class="fonttext" type="password" name="password" />
		</div>

		<div class="text-center fonttext">
			<button  class="btn btn-primary btn-color" type="submit">Register</button>
		</div>
	</form>
	</body>
	</html>