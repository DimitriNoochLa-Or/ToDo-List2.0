<?php 
	    require_once(__DIR__ . "/header.php");
		require_once(__DIR__ . "/../model/config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 

</head>
	<body>
	<br>
	<br>
		<div class="text-center">
		<h1>Login</h1>
		</div>
		<form method="post" action="<?php echo $path . "todo2.php" ; ?>">
		        <div class="login fonttext2 text-center">
					<label for="username">Username:</label>
					<input  class="fonttext"type="text" name="username" />
				</div>
			    <div class="login fonttext2 text-center">
					<label for="password">Password:</label>
					<input  class="fonttext" type="password" name="password" />
				</div>

			    <div class="login fonttext2 text-center">
					<button  class="btn btn-primary btn-color" type="submit">Enter</button>
				</div>
		</form>

	</body>
</html>
