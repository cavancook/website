<?php 
class User{

    public $username;
    public $password;

    public function __construct($username, $password = "abs123"){
        $this->username = $username;
        $this->password = $password;
    }

    public function isPassValid($password) {
        return $password == $this->password;
    }

}