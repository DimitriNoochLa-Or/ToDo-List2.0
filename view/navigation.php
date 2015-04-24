 <!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		require_once(__DIR__ . "/../model/config.php");
		require_once(__DIR__ . "/../controller/login-verify.php");

		if (!authenticateUser()){
			header("Location: " . $path . "todo2.php")// redirects user
			die();
		}

	// now have access to the path variable
	?>
	<br>
	<br>
	<br>
	<nav>
		<ul>
			<li>
			<!--  inserted php into href it echos to the variable path and concatenates it with a string to post.php -->
			 <a href="<?php echo $path . "todo2.php"?>">Blog post forum</a>
			 <a href="<?php echo $path . "login.php"?>">LOGIN</a>
			 <a href="<?php echo $path . "register.php"?>">REGISTER</a>

			 <!-- makes a link for blog post  -->
			</li>
		</ul>
	</nav>

</body>
</html>