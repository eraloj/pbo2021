<?php
namespace App;

class User{
    protected $username;
    protected $password;


function __construct($id,$pasw){
    $this->username = $id;
    $this->password = $pasw;
}

public function login(){
    return "$this->username Successfully log in to the system.";
}

public function setUsername($id){
    $this->username = $id;
}
public function setPassword($pasw){
    $this->password = $pasw;
}

public function getUsername(){
    return $this->username;
}
public function getPassword(){
    return $this->password;
}
}

?>