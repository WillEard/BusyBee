<?php

class ListVehicle extends DBClass
{
    protected function InsertVehicle($manufacturer, $model, $variant, $price, $year, $mileage, $gearbox, $fuel, $engineSize, $colour, $category, $userID, $registration)
    {
        $stmt = $this->Connect()->prepare('INSERT INTO vehicles (Manufacturer, Model, Variant, Price, Age, Mileage, Gearbox, FuelType, EngineSize, Colour, Category, UserID, Registration) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

        if (!$stmt->execute(array($manufacturer, $model, $variant, $price, $year, $mileage, $gearbox, $fuel, $engineSize, $colour, $category, $userID, $registration)))
        {
            $stmt = null;
            header("location: ../sell.php?error=internalerror");
            exit();
        }

        $stmt = null;
    }

    // CHECK if registration already exists
    protected function CheckRegistration($registration)
    {
        $stmt = $this->Connect()->prepare('SELECT Registration FROM vehicles WHERE Registration = ?;');

        if (!$stmt->execute(array($registration)))
        {
            $stmt = null;
            header("locatiom: ../sell.php?error=internalerror");
            exit();
        }
        
        $resultCheck;

        if ($stmt->rowCount() > 0)
        {
            $resultCheck = true;
        }
        else
        {
            $resultCheck = false;
        }

        return $resultCheck;
    }
} 