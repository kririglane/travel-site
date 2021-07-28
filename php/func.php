<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'laba';
$db_port = 3306;

$mysql = new mysqli('localhost', 'root', 'root', 'laba');

$mysql =  mysqli_connect(
   $db_host,
   $db_user,
   $db_password,
   $db_db
);


$name = filter_var(trim($_POST['name']), 
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), 
FILTER_SANITIZE_EMAIL);
$phone = filter_var(trim($_POST['phone']), 
FILTER_SANITIZE_STRING);
$place = filter_var(trim($_POST['place']), 
FILTER_SANITIZE_STRING);




$mysql->set_charset('utf8');

//$mysql->query("INSERT INTO  `table_Contacts`(`Name`, `Email`, `Phone`, `Place`) VALUES('$name', '$email', '$phone', '$plase')");
$query = "INSERT INTO `Contacts` (`ID`,`Name`, `Email`, `Phone`, `Place`) VALUES ('0', '$name', '$email', '$phone','$place')";
mysqli_query($mysql, $query);

$mysql->close();
?>