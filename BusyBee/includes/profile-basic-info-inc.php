<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_SESSION["userid"];
    $userName = $_SESSION["username"];

    $firstName = htmlspecialchars($_POST["profileName"], ENT_QUOTES, 'UTF-8');
    $surname = htmlspecialchars($_POST["profileSurname"], ENT_QUOTES, 'UTF-8');
    $phoneNo = htmlspecialchars($_POST["profilePhone"], ENT_QUOTES, 'UTF-8');

    include "../classes/DB-class.php";
    include "../classes/profileinfo-class.php";
    include "../classes/profileinfo-controller-class.php";
    $profileInfo = new ProfileInfoController($id, $userName);

    $profileInfo->UpdateProfileBasicInfo($firstName, $surname, $phoneNo);

    header("location: ../profile.php?error=none");
}