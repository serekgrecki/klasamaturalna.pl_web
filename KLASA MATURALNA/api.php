<?php 

$hostname = "localhost"; // the hostname you created when creating the database
$username = "srv1662_root";      // the username specified when setting up the database
$password = "mama1234";      // the password specified when setting up the database
$database = "srv1662_db";      // the database name chosen when setting up the database 

mysqli_connect($hostname, $username, $password) or die(mysqli_error());
mysqli_select_db($database) or die(mysqli_error());

if(function_exists($_GET['method'])) {
    $_GET['method']();}   
               
function getAllQuestions()
{
    $quest_sql = mysqli_query("SELECT * FROM losuj_pytanie");
    $quests = array();
    while($quest = mysqli_fetch_array($quest_sql)) {
       $quests[] = $quest;
    }
    $str = 'zażółć gęślą jaźń';

echo json_encode($str).PHP_EOL;
echo json_encode($str, JSON_UNESCAPED_UNICODE).PHP_EOL;
}
?>