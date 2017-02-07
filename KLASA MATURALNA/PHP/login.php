
<?php
$hostname = "localhost"; // the hostname you created when creating the database
$username = "srv1662_root";      // the username specified when setting up the database
$password = "mama1234";      // the password specified when setting up the database
$database = "srv1662_db";      // the database name chosen when setting up the database 
$link = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($link,"utf8");
?>