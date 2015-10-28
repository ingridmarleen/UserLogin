<?php
include_once('Database/db_connection.php');//make connection here
include_once('Display/register.html.php');

if($_POST['submit'] == 'register'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];	

        if($name=="")	{
            echo "<center>Vul uw naam in!</center>";	
        }
        else if($email=="")	{
            echo "<center>Vul uw emailadres in!</center>";	
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))	{
            echo "<center>Vul een geldig emailadres in!</center>";
        }
        else if($username=="")	{
            echo "<center>Vul uw naam in!</center>";
        }
        else if($password=="")	{
            echo "<center>Vul een wachtwoord in!</center>";
        }
        else if(strlen($password) < 6){
            echo "<center>Wachtwoord moet minimaal 6 tekens lang zijn</center>";	
        }
        else
        {
            $user->register($name,$email,$username,$password);
             
        } 
    }

	

   


?>  

