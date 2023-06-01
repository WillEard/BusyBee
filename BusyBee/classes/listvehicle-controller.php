<?php

class VehicleListController extends ListVehicle
{
    
    public function __construct($manufacturer, $model, $variant, $price, $year, $mileage, $fuel, $gearbox, $engineSize, $colour, $category, $userID, $registration)
    {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->variant = $variant;
        $this->price = $price;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->fuel = $fuel;
        $this->gearbox = $gearbox;
        $this->engineSize = $engineSize;
        $this->colour = $colour;
        $this->category = $category;
        $this->userID = $userID;
        $this->registration = $registration;
    }

    public function ListVehicle()
    {
        // Check if fields are empty
        if ($this->EmptyInput() == false)
        {
            header("location: ../sell.php?error=emptyfield");
            exit();
        }

       if ($this->CheckRegistration($this->registration))
       {
            header("location: ../sell.php?error=regexists");
            exit();
       }
        
        // IF all good then further process data
        $this->InsertVehicle($this->manufacturer,$this->model, $this->variant, $this->price,$this->year, $this->mileage, $this->gearbox, $this->fuel, $this->engineSize, $this->colour, $this->category, $this->userID, $this->registration);
    }

    private function EmptyInput()
    {
        $result;

        if (empty($this->registration) || empty($this->manufacturer) || empty($this->model) || empty($this->variant) || empty($this->price) || empty($this->year) || empty($this->mileage) || empty($this->fuel) || empty($this->gearbox) || empty($this->engineSize) || empty($this->colour) || empty($this->category))
        {
            $result = false;
        }   
        else
        {
            $result = true;
        }

        return $result;
    }
}