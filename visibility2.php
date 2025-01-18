<?php 
class Users{
    private $password;
    protected $username;

    function __construct($username, $password){
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    function login($inputPassword){
        if(password_verify($inputPassword, $this->password)){
            return "Selamat datang $this->username";
        }else{
            return "Password salah";
        }
    }
}

class Admin extends Users{
    public function getName(){
        return $this->username;
    }
}


$admin = new Admin("rizky ardiansyah", "1234");
echo $admin->login("123");

echo $admin->getName();
?>