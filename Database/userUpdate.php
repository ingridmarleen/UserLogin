<?php
include_once ('db_connection.php');

$row = $user->getUserInfo();
$name = $row['name'];
$email = $row['email'];
$username = $row['username'];
$password = '';

include_once ('/Display/headerWrap.php');
include_once ('/Display/userUpdate.html.php');

if($_POST['submit'] == 'save'){
    
    $user->updateUser(); 
}
include_once ('/Display/footerWrap.php');


