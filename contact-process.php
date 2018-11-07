<?php
include('config.php');

//Accept data from contact.php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phonenumber = $_POST['phonenumber'];

       

$query = mysql_query("INSERT INTO message VALUES('', '$name', '$email', '$phonenumber', '$message')") or die(mysql_error());
 
if ($query) {
	
    header('location:contact.php?message=success');
}

?>