<?php
	require_once(__DIR__ . "/../model/config.php");
	//dir concatinates the directory to the file 
   
	$query= $_SESSION["connection"]->query("CREATE TABLE users ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "username varchar(30) NOT NULL,"
		. "password char(128) NOT NULL, "
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY (id))");

	if ($query) {									// checks to see if this statement exists
		
		echo "<p>Successfully created table: users</p>";   // lets you know that it succesfully created table:posts
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";			//lets you know that table:posts already exists
	}
