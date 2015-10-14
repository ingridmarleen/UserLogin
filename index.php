<?php

switch ($_POST) {
    case "register":
        include ('Database/db_connection.php');
        include ('register.php');
        break;
    case "login":
        include ('Database/db_connection.php');
        include ('headerWrap.php');
        $user->getUserInfo();
        include ('footerWrap.php');
        break;
    case "modify":
        include ('Database/db_connection.php');
        include ('gebruikerUpdate.php');
        break;
    default:
        include_once ('login.php'); 
        break;
}



?>