<?php
include_once ('Database/db_connection.php');

include_once ('/Display/headerWrap.php');
include_once ('/Display/userData.html.php');
$row = $user->getUserInfo();

echo 'Naam:           ' . $row['name'] . '<br />';
echo 'Email:          ' . $row['email'] . '<br />';
echo 'Gebruikersnaam: ' . $row['username'] . '<br />';

include_once ('/Display/footerWrap.php');
    
?>

