<?php
include_once('Database/db_connection.php');//make connection here
include_once('Display/register.html.php');

if($_POST['submit'] == 'register'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];	

        if($name=="")	{
            echo "Vul uw naam in!";	
        }
        else if($email=="")	{
            echo "Vul uw emailadres in!";	
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))	{
            echo "Vul een geldig emailadres in!";
        }
        else if($username=="")	{
            echo "Vul uw naam in!";
        }
        else if($password=="")	{
            echo "Vul een wachtwoord in!";
        }
        else if(strlen($password) < 6){
            echo "Wachtwoord moet minimaal 6 tekens lang zijn";	
        }
        else
        {
            try
            {
                $stmt = $db->prepare("SELECT name, email FROM user WHERE username=:username OR email=:email");
                $stmt->execute(array(':username'=>$username, ':email'=>$email));
                $row=$stmt->fetch(PDO::FETCH_ASSOC);

                if($row['username']==$username) {
                    echo "Gebruikersnaam bestaat al";
                }
                else if($row['email']==$email) {
                    echo "Emailadres bestaat al";
                }
                else
                {
                    $user->register($name,$email,$username,$password);
                    header('Display/login.html.php');
                    echo "<center>Registreren is gelukt, log in aub.</center>";
                }
            }
            catch(PDOException $e)
            {
                    echo $e->getMessage();
            }
        } 
    }

	

   


?>  

