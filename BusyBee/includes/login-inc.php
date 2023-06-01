<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // GET data from form
    $uname = htmlspecialchars($_POST["uname"], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST["pass"], ENT_QUOTES, 'UTF-8');
    
    //INSTANTIATE SignupController class
    include "../classes/DB-class.php";
    include "../classes/login-class.php";
    include "../classes/login-controller-class.php";

    $login = new LoginController($uname, $password);

    // RUN Error handlers
    $login->LoginUser();

    // GO to homepage
    header("location: ../index.php?error=none");
}



