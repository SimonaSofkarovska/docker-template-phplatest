<?php


if(isset($_POST["submit"])){
    //get data
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
    $pwdRepeat=$_POST["pwdRepeat"];
    $email=$_POST["email"];

    //Initialize signup controller class
    include "../classes/db.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller.classes.php";
    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);

    //error handlers
    $signup->signupUser();

    //go back to front page
    header("location: ../index.php?error=none");
}