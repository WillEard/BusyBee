<?php

class BrowseVehicleView extends Browse
{
    // GET column data from each row
    public function FetchInfo()
    {
        $data = $this->GetRows();

        return $data;
    }

    
    // GET Number of rows in vehicles table to show
    public function FetchNumberOfRows()
    {
        $rowCount = $this->GetNumberOfRows();

        return $rowCount;
    }
    
}