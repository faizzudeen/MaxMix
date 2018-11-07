<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';

	$dbname = 'anish'; 
	//mengubung ke host
	$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
	 
	//memilih database yang akan digunakan
	$dbselect = mysql_select_db($dbname);

?>