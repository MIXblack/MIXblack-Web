<?php
	date_default_timezone_set("Asia/Kolkata");

	define("MYSQL_HOST", "localhost:3306");
	define("MYSQL_USER", "hrspotc1_dbAdmin");
	define("MYSQL_PASS", "Raja131077!");
	define("MYSQL_DB", "hrspotc1_hrspot");

	$conn = mysql_connect("".MYSQL_HOST."", "".MYSQL_USER."", "".MYSQL_PASS."") or die(mysql_error());
	
	mysql_select_db("".MYSQL_DB."",$conn) or die(mysql_error());
?> 