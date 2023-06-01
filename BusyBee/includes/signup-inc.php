<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // GET data from form
    $uname = htmlspecialchars($_POST["uname"], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST["pass"], ENT_QUOTES, 'UTF-8');
    $confirmPassword = htmlspecialchars($_POST["confirmpass"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');

    $_SESSION['uname'] = $_POST['uname'];

    //INSTANTIATE SignupController class
    include "../classes/DB-class.php";
    include "../classes/signup-class.php";
    include "../classes/signup-controller-class.php";
    $signup = new SignupController($uname, $password, $confirmPassword, $email);

    //RUN Error handlers and signup
    $signup->SignUpUser();

    // GET Users ID - Database Index value
    $userId = $signup->FetchUserID($uname);

    // INSTANTIATE ProfileInfoController class
    include "../classes/profileinfo-class.php";
    include "../classes/profileinfo-controller-class.php";
    $profileInfo = new ProfileInfoController($userId, $uname);

    $profileInfo->DefaultProfileInfo();

    $profileInfo->DefaultProfileBasicInfo();
    

    // GO to homepage
    header("location: ../index.php?error=none");
}

