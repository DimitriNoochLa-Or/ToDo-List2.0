<?php 
$mysqli = new mysqli('localhost' , 'root' , 'root' , 'todo2');//task is the name of the database
if ($mysqli-> connect_errno) {
	die('Connect Error(' . $mysqli->connect_errno . ')' 
	. $mysqli->connect_error);
}else{
	//echo "Connection Made";

}
$mysqli->close();
?>