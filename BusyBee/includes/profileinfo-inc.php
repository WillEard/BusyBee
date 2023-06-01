<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_SESSION["userid"];
    $userName = $_SESSION["username"];

    $profileTitle = htmlspecialchars($_POST["profileTitle"], ENT_QUOTES, 'UTF-8');
    $profileIntro = htmlspecialchars($_POST["profileIntro"], ENT_QUOTES, 'UTF-8');
    $profileAbout = htmlspecialchars($_POST["profileAbout"], ENT_QUOTES, 'UTF-8');

    include "../classes/DB-class.php";
    include "../classes/profileinfo-class.php";
    include "../classes/profileinfo-controller-class.php";
    $profileInfo = new ProfileInfoController($id, $userName);

    $profileInfo->UpdateProfileInfo($profileAbout, $profileTitle, $profileIntro);

    header("location: ../profile.php?error=none");
}