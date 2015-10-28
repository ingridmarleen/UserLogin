<?php
session_start();

$servername = "localhost";
$dbusername = "root";
$dbpassword = null;
$dbname = "IVIK";

try{
    $db = new PDO("mysql:host=$servername; dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $ex) {
    echo "ERROR: " . $ex -> getMessage();
}

if($_POST['submit'] == 'logout'){
    $db=null;
}
include_once 'class.user.php';
$user = new User($db);

?>
