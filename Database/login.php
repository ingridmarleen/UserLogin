<?php
include_once ('Database/db_connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$user->login($username,$password);

if (User::is_loggedin()){
    include_once ('Display/headerWrap.php');
    echo '<h2>Welkom, u bent ingelogd.</h2>';
    include_once ('Database/userData.php');
    include_once ('Display/footerWrap.php'); 
}
else
{
include_once('index.php');
include_once('Display/login.html.php');
echo '<center>Combinatie gebruikersnaam/wachtwoord klopt niet!</center>';

}

?>