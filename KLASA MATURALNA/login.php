
<?php
$hostname = "localhost"; // the hostname you created when creating the database
$username = "root";      // the username specified when setting up the database
$password = "";      // the password specified when setting up the database
$database = "klasa_maturalna_db";      // the database name chosen when setting up the database 
$link = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($link,"utf8");
?>