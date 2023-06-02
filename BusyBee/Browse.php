<?php
    include_once 'Navbar.php';

    include "classes/DB-class.php";
    include "classes/browseVehicle-class.php";
    include "classes/browseVehicle-view.php";

    $browseData = new BrowseVehicleView();
?>
<head>
    <link rel="stylesheet" href="stylesheets/New-Used-style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body class="bg-dark">
    <div class="container-fluid deep-orange">
        <div class="px-4 py-2 text-left">
            <h1 class="display-5 fw-bold lh-1 mb-2">Browse</h1>
     
            <button class="btn bg-dark text-light d-block d-sm-none d-sm-block d-md-none d-md-block d-lg-none d-lg-block d-xxl-none " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Filters</button>
            
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header" style="background-color: #FF8B28;">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel"  >Vehicle Filters</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-dark">
                    <div class="text-light">
                        Use the drop-down options below to filter through vehicles.
                    </div>
                    <div class="dropdown mt-3 text-center">
                        <div class="btn-group-vertical text-center">
                            <select id="Manuf" class="form-select form-select-lg bg-light mt-1" aria-label=".form-select-sm example" oninput="GetSelectedManufacturer(this.value)" data-Manufacturer>
                                <option selected disabled>Manufacturer</option>
                            </select>

                            <select id="Model" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Model">
                                <option selected disabled>Model</option>
                            </select>

                            <select id="Variant" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Variant>
                                <option selected disabled>Variant</option>
                            </select>

                            <select id="Price" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Price>
                                <option selected disabled>Price</option>
                            </select>
                            <select id="Year" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Year>
                                <option selected disabled>Year</option>
                            </select>
                            <select id="Mileage" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Mileage>
                                <option selected disabled>Mileage</option>
                            </select>
                            <select id="Gearbox" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Gearbox>
                                <option selected disabled>Gearbox</option>
                            </select>
                            <select id="FuelType" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-FuelType>
                                <option selected disabled>Fuel Type</option>
                            </select>
                            <select id="EngineSize" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-EngineSize>
                                <option selected disabled>Engine Size</option>
                            </select>
                            <select id="Colour" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Colour>
                                <option selected disabled>Colour</option>
                            </select>
                            <select id="CAT" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Cat>
                                <option selected disabled>CAT</option>
                                <option value="0">None</option>
                                <option value="1">CAT S</option>
                                <option value="2">CAT D</option>
                                <option value="3">CAT N</option>
                            </select>
                            <button class="btn mt-1" type="submit" style="background-color: #FF8B28;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-light" >
        <div class="row">

            <div class="col-md-3 bg-dark text-center px-1 py-1 mx-auto" >
                <div class="btn-group-vertical text-center d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block bg-dark mt-2">
                    
                    <select id="Manuf" class="form-select form-select-lg bg-light mt-1" aria-label=".form-select-sm example" oninput="GetSelectedManufacturer(this.value)" data-Manufacturer>
                        <option selected disabled>Manufacturer</option>
                    </select>

                    <select id="Model" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Model">
                        <option selected disabled>Model</option>
                    </select>

                    <select id="Variant" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Variant>
                        <option selected disabled>Variant</option>
                    </select>

                    <select id="Price" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Price>
                        <option selected disabled>Price</option>
                    </select>
                    <select id="Year" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Year>
                        <option selected disabled>Year</option>
                    </select>
                    <select id="Mileage" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Mileage>
                        <option selected disabled>Mileage</option>
                    </select>
                    <select id="Gearbox" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Gearbox>
                        <option selected disabled>Gearbox</option>
                    </select>
                    <select id="FuelType" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-FuelType>
                        <option selected disabled>Fuel Type</option>
                    </select>
                    <select id="EngineSize" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-EngineSize>
                        <option selected disabled>Engine Size</option>
                    </select>
                    <select id="Colour" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Colour>
                        <option selected disabled>Colour</option>
                    </select>
                    <select id="CAT" class="form-select form-select-lg mt-1" aria-label=".form-select-sm example" data-Cat>
                        <option selected disabled>CAT</option>
                        <option value="0">None</option>
                        <option value="1">CAT S</option>
                        <option value="2">CAT D</option>
                        <option value="3">CAT N</option>
                    </select>
                    <button class="btn mt-1 fw-bold rounded" type="reset" style="background-color: #FF8B28;">Reset</button>
                    <button class="btn mt-1 fw-bold rounded btn-success" type="submit">Search</button>
                    <a class="btn mt-3 fw-bold rounded" type="button" style="background-color: #FF8B28;">Check a Reg</a>
                </div>
            </div>
            
            <div class="col-lg-8 px-1 py-3 mx-auto">
                <div class="container-fluid text-center bg-success rounded-top mb-3">
                    <h5 class="fw-bold">Results</h5>
                </div>
      
                <?php
                    $count = $browseData->FetchNumberOfRows();
                    
                    for ($x = 0; $x < $count; $x++) 
                    {
                        echo '
                        
                        <div id="hoverable" class="container-fluid rounded pb-1 pt-1 mb-2 mx-auto shadow hoverable">
                            <div id="row" class="row rounded mt-1 mb-1">
                                <div id="col1" class="col-md-6 text-center">
                                    <img src="img/car-hatchback-svgrepo-com.png" class="img-fluid w-100 rounded" alt="...">
                                    <hr/>
                                ';
                                        $vehicleID = $browseData->FetchUID();
                                echo '<a href="#" id="$vehicleID[$x]["VehicleID"]" class="btn mt-3 fw-bold rounded bg-dark text-light d-block" type="button" >View More</a>
                                </div>
                                <div class="col-md-3 p-3 ps-2">
                                    <h4 class="mt-0 fw-bold"> ';  
                                        $manuf = $browseData->FetchManufacturer(); 
                                        echo $manuf[$x]["Manufacturer"];
                                    echo '</h4>';
                                    
                                    echo '<h5 class="fw-bold">'; 
                                        $model = $browseData->FetchModel(); 
                                        echo $model[$x]["Model"];
                                    echo '<span> | </span>'; 
                                       $var = $browseData->FetchVariant(); 
                                       echo $var[$x]["Variant"]; 
                                    echo '</5>';

                                    echo '<h5 class="fw-bold">';
                                        $year = $browseData->FetchAge(); 
                                        echo 'Year: '.$year[$x]["Age"];
                                    echo'</h5>';

                                    echo '<h5 class="fw-bold">';
                                        $miles = $browseData->FetchMileage(); 
                                        echo 'Mileage: '.$miles[$x]["Mileage"];
                                    echo'</h5>';

                                    echo '<h5 class="fw-bold">';
                                        $fuel = $browseData->FetchFuel(); 
                                        echo 'Fuel: '.$fuel[$x]["FuelType"];
                                    echo'</h5>';
                                
                                echo'
                                </div> 
                                <div class="col-md-3 p-3 ps-2"> ';

                                    echo '<h4 class="mt-0 fw-bold">';  
                                        $price = $browseData->FetchPrice();
                                        echo '£'.$price[$x]["Price"];
                                    echo '</h4>';
                                        
                                    echo '<h5 class="fw-bold">';
                                        $cat = $browseData->FetchCategory();
                                        echo 'Category: '.$cat[$x]["Category"];
                                    echo '</h5>';

                                    echo '<h5 class="fw-bold">';
                                        $colour = $browseData->FetchColour(); 
                                        echo 'Colour: '.$colour[$x]["Colour"];
                                    echo'</h5>';

                                    echo '<h5 class="fw-bold">';
                                        $gear = $browseData->FetchGearbox(); 
                                        echo 'Gearbox: '.$gear[$x]["Gearbox"];
                                    echo'</h5>';

                                    echo '<h5 class="fw-bold">';
                                        $engine = $browseData->FetchGearbox(); 
                                        echo 'Engine: '.$engine[$x]["EngineSize"];
                                    echo'</h5>';

                                echo'
                                </div>
                            </div>
                        </div>
                        
                        ';
                    }
                ?>
                
                
                
                
            </div>  
        </div>
    </div>

    <!--<script src="scripts/browse-filter.js"></script> -->
    <script src="scripts/browse-filter-test.js"></script>

</body>