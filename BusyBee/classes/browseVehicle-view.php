<?php

class BrowseVehicleView extends Browse
{
    public function FetchManufacturer()
    {
        $manufacturerInfo = $this->GetRows();

        foreach( $manufacturerInfo as $row ) 
        {
            //echo $row['Manufacturer'];
        }

        echo $manufacturerInfo[0]["Manufacturer"];
    }

    public function FetchModel()
    {
        $modelInfo = $this->GetRows();

        echo $modelInfo[0]["Model"];
    }

    public function FetchVariant()
    {
        $varInfo = $this->GetRows();

        echo $varInfo[0]["Variant"];
    }

    public function FetchNumberOfRows()
    {
        $rowCount = $this->GetNumberOfRows();

        echo $rowCount;
    }
    
}