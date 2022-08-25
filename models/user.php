<?PHP 

class User 

{
    private $id; 
    private $username; 
    private $password;
    private $role
   




    function getId(){
        return $this->id;
    }
    function getUsername()
    {
        return $this->username;
    } 

    function getPassword()
    {
        return $this->password; 
    }
    
    
    function getRole()
    {
        return $this->role; 
    }




    function setId()
    {
        $this->id=$id;  
    }
    function setUsername()
    {
        $this->username=$username;  
    }
    function setPassword()
    {
        $this->password=$password;  
    }

    function setRole()
    {
        $this->role=$role;  
    }
}



?>