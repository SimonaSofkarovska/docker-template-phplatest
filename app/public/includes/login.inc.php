<?php

if(isset($_POST["submit"])){
    //get data
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];


    //Initialize signup controller class
    include "../classes/db.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-controller.classes.php";
    $login = new loginController($uid, $pwd);

    //error handlers

    $login-> loginUser();

    //go back to front page
    header("location: ../index.php?error=none");
}
