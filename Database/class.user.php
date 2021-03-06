<?php

class User
{
    private $_db;
        
    function __construct($db) 
    {
        $this->_db = $db;              
    }
      
    public function login($username, $password)
    {
        $user = array(
            'username'  => $username,
            'password'  => $password,
        );
        
        try {
            $sql = "SELECT * FROM 
                        user 
                    WHERE 
                        username = :username && 
                        password = :password
                    ";
            $stmt = $this->_db->prepare($sql);
                
            $stmt->execute($user);
        
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
            if($stmt->rowCount() == 1)
            {
                if($password == $row['password']){
                    $_SESSION['user'] = $row['ID'];
                                        
                } 
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    public static function is_loggedin()
    {
        if(isset($_SESSION['user']))
        {
            return true;
        }
    }
    
    public function logout()
    {
        session_destroy();
        unset($_SESSION['user']);
        $this->__destruct();
    }
    
    function getUserInfo()
    {
        if(self::is_loggedin())  
        {
            try {
                $sql = "SELECT * FROM 
                            user 
                        WHERE 
                            ID = :ID
                        ";
                $stmt = $this->_db->prepare($sql);
                
                $ID = $_SESSION['user'];
                
                $stmt->bindparam(":ID", $ID);
                $stmt->execute();  

                $row = $stmt->fetch(PDO::FETCH_ASSOC); 
                
            } 
            catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        return $row;
    }
    
    public function updateUser()
    {
        if(self::is_loggedin() && !empty($_POST['password']))  
        {       
            try {
                $sql = "UPDATE 
                            user 
                        SET 
                            name        = :name,
                            email       = :email,
                            username    = :username,
                            password    = :password
                        WHERE
                            ID = :ID
                ";

                $stmt = $this->_db->prepare($sql);
                
                $ID = $_SESSION['user'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                                
                $stmt->bindparam(":ID", $ID);
                $stmt->bindparam(":name", $name);
                $stmt->bindparam(":email", $email);
                $stmt->bindparam(":username", $username);
                $stmt->bindparam(":password", $password);
                
                $stmt->execute();
            }
            catch (Exception $e) {
                echo $e->getMessage();
            }
            
            echo 'Gegevens zijn gewijzigd';
        }
        else{
            echo 'Controleer uw wachtwoord alstublieft';
        }
    }
        
    
    public function register($name,$email,$username,$password)
    {
        try
        {
            $sql = "INSERT INTO 
                        user(name,email,username,password) 
                    VALUES
                        (:name, :email, :username, :password)
                    ";
            
            $stmt = $this->_db->prepare($sql);

            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":username", $username);
            $stmt->bindparam(":password", $password);										  

            $stmt->execute();	
	
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        header('Display/login.html.php');
        echo "<center>Registreren is gelukt, log in aub.</center>";
    }
    
    public function __destruct(){
            
        }    
}



?>

