<?php 
$conn = new mysqli(SERVERNAME,DBUSER,DBPASS,DBNAME);
if($conn->connect_errno){
	die("Connection failed: ".$conn->connect_error);
	exit();
}
?>