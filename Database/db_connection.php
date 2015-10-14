<?php
session_start();

    $servername = "localhost";
    $username = "root";
    $password = null;
    $dbname = "IVIK";

    try{
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } 
    catch (PDOException $ex) {
        echo "ERROR: " . $ex -> getMessage();
    }
    
    include_once ('user.class.php');
    $user = new User($conn);
?>
