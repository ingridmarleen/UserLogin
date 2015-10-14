<?php

class User
{
    private $_id;
    private $_name;
    private $_email;
    private $_username;
    private $_password;
        
    function __construct($id, $name, $email, $username, $password) 
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_email = $email;
        $this->_username = $username;
        $this->_password = $password;
                
        echo "<br />Nieuw User object $name wordt aangemaakt";
    }
    
     
    function setName($name) 
    {
        // als inlog is gelukt
        $this->_name = $name;
    }
    
    function getName()
    {
        // als inlog is gelukt
        return $this->_name;
    }
    
    function setEmail($email) 
    {
        // als inlog is gelukt
        $this->_email = $email;
    }
    
    function getEmail()
    {
        // als inlog is gelukt
        return $this->_email;
    }
    
    function setUsername($username) 
    {
        // als inlog is gelukt
        $this->_username = $username;
    }
    
    function getUsername()
    {
        // als inlog is gelukt
        return $this->_username;
    }
    
    function setPassword($password) 
    {
        // als inlog is gelukt
        $this->_password = $password;
    }
    
    function getPassword()
    {
        // als inlog is gelukt
        return $this->_password;
    }
    
    function loginUser()
    {
        
    }
      
    function getUserInfo()
    {
    echo "userinfo";    
        
    }
    
    function registerUser()
    {
        
    }
        
}



?>

