<?php

class BrowseVehicleView extends Browse
{
    public function FetchUID()
    {
        $uID = $this->GetRows();

        return $uID;
    }

    public function FetchManufacturer()
    {
        $manufacturerInfo = $this->GetRows();

        return $manufacturerInfo;
    }

    public function FetchModel()
    {
        $modelInfo = $this->GetRows();

        return $modelInfo;
    }

    public function FetchVariant()
    {
        $varInfo = $this->GetRows();

        return $varInfo;
    }

    public function FetchPrice()
    {
        $priceInfo = $this->GetRows();

        return $priceInfo;
    }

    public function FetchAge()
    {
        $ageInfo = $this->GetRows();

        return $ageInfo;
    }

    public function FetchMileage()
    {
        $mileage = $this->GetRows();

        return $mileage;
    }

    public function FetchGearbox()
    {
        $gearbox = $this->GetRows();

        return $gearbox;
    }

    public function FetchFuel()
    {
        $fuel = $this->GetRows();

        return $fuel;
    }

    public function FetchEngineSize()
    {
        $engine = $this->GetRows();

        return $engine;
    }

    public function FetchColour()
    {
        $colour = $this->GetRows();

        return $colour;
    }

    public function FetchCategory()
    {
        $cat = $this->GetRows();

        return $cat;
    }


    // GET Number of rows in vehicles table to show
    public function FetchNumberOfRows()
    {
        $rowCount = $this->GetNumberOfRows();

        return $rowCount;
    }
    
}