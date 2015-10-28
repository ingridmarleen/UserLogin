<?php

if(isset($_POST['submit']))
{
    switch ($_POST['submit']) {
        case "register":
            include_once ('Database/register.php');
            break;
        case "addUser":
            include_once ('Display/register.html.php');
            break;
        case "login":
            include_once ('Database/login.php');
            break;
        case "update":
            include_once ('Database/userUpdate.php');
            break;
        case "data":
            include_once ('Database/userData.php');
            break;
        case "logout":
            include_once ('Database/logout.php');
            break;
        case "save":
            include_once ('Database/userUpdate.php');
            break;
        case "register":
            include_once ('Database/register.php');
            break;
        default:
            include_once ('Display/login.html.php'); 
            break;
    }
}
 else {
    include_once ('Display/login.html.php'); 
}



?>