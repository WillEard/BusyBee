<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // CHECK HERE IF SESSION IS ACTIVE / LOGGED IN 

    // GET data from form
    $registration = htmlspecialchars($_POST["registration"], ENT_QUOTES, 'UTF-8');
    $manufacturer = htmlspecialchars($_POST["manufacturer"], ENT_QUOTES, 'UTF-8');
    $model = htmlspecialchars($_POST["model"], ENT_QUOTES, 'UTF-8');
    $variant = htmlspecialchars($_POST["variant"], ENT_QUOTES, 'UTF-8');
    $price = htmlspecialchars($_POST["price"], ENT_QUOTES, 'UTF-8');
    $year = htmlspecialchars($_POST["year"], ENT_QUOTES, 'UTF-8');
    $mileage = htmlspecialchars($_POST["mileage"], ENT_QUOTES, 'UTF-8');
    $fuel = htmlspecialchars($_POST["fuel"], ENT_QUOTES, 'UTF-8');
    $gearbox = htmlspecialchars($_POST["gearbox"], ENT_QUOTES, 'UTF-8');
    $engineSize = htmlspecialchars($_POST["enginesize"], ENT_QUOTES, 'UTF-8');
    $colour = htmlspecialchars($_POST["colour"], ENT_QUOTES, 'UTF-8');
    $category = htmlspecialchars($_POST["category"], ENT_QUOTES, 'UTF-8');
    $additionalInfo = htmlspecialchars($_POST["additional"], ENT_QUOTES, 'UTF-8');

    // GET User
    $userID = $_SESSION["userid"];

    // Includes
    include "../classes/DB-class.php";
    include "../classes/listvehicle-model.php";
    include "../classes/listvehicle-controller.php";

    // Instantiate new VehicleListController passing form data
    $listVehicle = new VehicleListController($manufacturer, $model, $variant, $price, $year, $mileage, $fuel, $gearbox, $engineSize, $colour, $category, $userID, $registration);

    // CALL method to process data inside VehicleListController
    $listVehicle->ListVehicle();

    // Redirect to page
    header("location: ../sell.php?error=success");
}