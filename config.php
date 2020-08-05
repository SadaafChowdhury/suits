<?php
	$db_user="root"
	$db_pass ="";
	$db_name = "users";
	
	$db = new PDO("mysql:host=localhost; db_name=" . $db_name .";charset=utf8", db_user, db_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERR_EXCEPTION);
?>