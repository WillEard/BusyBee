<?php
    include_once 'Navbar.php';
?>

<head>
    <link rel="stylesheet" href="stylesheets/LoginSignup-Style.css">
    <link rel="stylesheet" href="stylesheets/form-errors.css">  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script type="text/javascript" src="scripts/sell-form-validation.js"></script>
    
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
</head>
<body style="background-color: #FF8B28;">
    <?php
       
    ?>
    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row">

                <div class="col-lg-6 mx-auto text-lg-start text-center">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Sell your car today.</h1>
                    <hr/>
                    <p class="fw-bold text-dark">Fields marked with (*) are required.</p>
                    <?php
                        if (isset($_GET["error"]))
                        {
                            if ($_GET["error"] == "regexists")
                            {
                                echo '<div class="alert alert-danger d-flex align-items-center mt-5 w-75" role="alert">
                                <div class="mx-auto align-items-center">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    The registration entered is already listed.
                                </div>
                                </div>';
                            }
                        }
                    ?>
                </div>


                <div class="col-md-6 mx-auto col-lg-6"> 
                    <form name="sell-form" id="sell-form" class="p-4 p-md-5 rounded needs-validation" action="includes/sell-inc.php" method="post" onsubmit="validateForm();">
                        
                        <input type="text" id="id" name="id" value="<?php $_SESSION["username"]; ?>" required hidden disabled>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control has-validation" id="registration" name="registration" aria-describedby="reghelp" placeholder="Registration" value="" required>
                            <label id="registration" for="registration">Registration *</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control has-invalidation" id="manufacturer" name="manufacturer" placeholder="Manufacturer" required>
                            <label for="Manufactuer">Manufacturer *</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control has-validation" id="model" name="model" aria-describedby="modelhelp" placeholder="Model" required>
                            <label for="model">Model *</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control has-validation" id="variant" name="variant" aria-describedby="varianthelp" placeholder="Variant" required>
                            <label for="variant">Variant *</label> 
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control has-validation" id="price" name="price" aria-describedby="pricehelp" placeholder="Price" required>
                            <label for="price">Price * (£)</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control has-validation" id="year" name="year" aria-describedby="yearhelp" placeholder="Year" required>
                            <label for="year">Year *</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control has-validation" id="mileage" name="mileage" aria-describedby="mileagehelp" placeholder="Mileage" required>
                            <label for="mileage">Mileage *</label>
                        </div>

                        <div class="dropdown">
                            <div class="form-floating mb-3 text-center">
                                <select id="fuel" class="form-select bg-light" aria-label="form-select-sm example" name="fuel" required>
                                    <option selected disabled>Fuel Type *</option>
                                    <option value="Petrol">Petrol</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Electric">Electric</option>
                                    <option value="Hydrogen">Hydrogen</option>
                                </select>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div class="form-floating mb-3 text-center">
                                <select id="gearbox" class="form-select bg-light" aria-label=".form-select-sm example" name="gearbox" required>
                                    <option selected disabled>Gearbox *</option>
                                    <option value="Automatic">Automatic</option>
                                    <option value="Manual">Manual</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control has-validation" id="enginesize" name="enginesize" aria-describedby="enginesizehelp" placeholder="Engine Size" required>
                            <label for="enginesize">Engine Size *</label>
                        </div>

                        <div class="dropdown">
                            <div class="form-floating mb-3 text-center">
                                <select id="colour" class="form-select bg-light" aria-label=".form-select-sm example" name="colour" required>
                                    <option selected disabled>Colour *</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                    <option value="Grey">Grey</option>
                                    <option value="Green">Green</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Red">Red</option>
                                    <option value="Purple">Purple</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="dropdown text-center">
                            <div class="form-floating mb-3">
                                <select id="category" class="form-select bg-light" aria-label=".form-select-sm example" name="category" required>
                                    <option selected disabled>Category *</option>
                                    <option value="NO">NO CAT</option>
                                    <option value="A">CAT A</option>
                                    <option value="B">CAT B</option>
                                    <option value="C">CAT C</option>
                                    <option value="D">CAT D</option>
                                    <option value="N">CAT N</option>
                                    <option value="S">CAT S</option>
                                </select>
                                <button type="button" class="btn btn-dark mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                    </svg> 
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-dark text-light">
                                            <div class="modal-header" style="background-color: #FF8B28;">
                                                <h5 class="modal-title" id="exampleModalLabel">Vehicle Categories</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h4 class="fw-bold">CAT A - Cannot be repaired</h4>
                                                <p>Vehicle must be crushed/destroyed</p>
                                                <hr/>
                                                <h4 class="fw-bold">CAT B - Cannot be repaired</h4>
                                                <p>Body shell has to be crushed, but you can salvage other parts from it</p>
                                                <hr/>
                                                <h4 class="fw-bold">CAT C - Can be repaired</h4>
                                                <p>You can use the vehicle again if it’s repaired to a roadworthy condition. Repair cost would outweight the vehicle's value</p>
                                                <hr/>
                                                <h4 class="fw-bold">CAT D - Can be repaired</h4>
                                                <p>You can use the vehicle again if it’s repaired to a roadworthy condition. Can be repaired and would cost less than the vehicle’s value</p>
                                                <hr/>
                                                <h4 class="fw-bold">CAT N - Can be repaired</h4>
                                                <p>You can use the vehicle again if it’s repaired to a roadworthy condition. Following non-structural damage</p>
                                                <hr/>
                                                <h4 class="fw-bold">CAT S - Can be repaired</h4>
                                                <p>You can use the vehicle again if it’s repaired to a roadworthy condition. Following structural damage</p>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control has-validation" id="additional" name="additional" aria-describedby="additionalhelp" placeholder="additional"></textarea>
                            <label for="additional">Additional Information (optional)</label>
                        </div>

                        <?php
                            if(isset($_SESSION["userid"]))
                            {
                            echo '<button class="w-100 btn btn-lg btn-dark" type="submit" id="submitbutton">Next</button>';
                            }
                            else
                            {
                            echo '<button class="w-100 btn btn-lg btn-dark" type="submit" id="submitbutton" disabled>Login to Submit</button>';
                            }
                        ?>
                    
                        <hr class="my-3">
                    </form>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>