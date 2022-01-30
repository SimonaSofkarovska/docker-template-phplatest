<?php

class SignupController extends Signup {
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;


    public function  __construct($uid, $pwd, $pwdRepeat, $email){
        $this->uid=$uid;
        $this->pwd=$pwd;
        $this->pwdRepeat=$pwdRepeat;
        $this->email=$email;
    }

    public function signupUser(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false){
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false){
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false){
            header("location: ../index.php?error=passwordsmatch");
            exit();
        }
        if($this->uidTakenCheck() == false){
            header("location: ../index.php?error=usertaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput(){
        $result;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    function invalidUid(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $result= false;
        }
        else{
            $result=true;
        }
        return $result;
    }
    function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result=false;
        }
        else{
            $result= true;
        }
        return $result;
    }
    function pwdMatch(){
        $result;
        if($this->pwd !== $this->pwdRepeat){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }
    function uidTakenCheck(){
        $result;
        if(!$this->checkUser($this->uid,$this->email)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }
}
