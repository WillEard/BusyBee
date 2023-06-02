<?php
    include_once 'Navbar.php';
?>
<head>
    <link rel="stylesheet" href="stylesheets/index.css">
</head>
<body class="bg-dark" style="scrollbar-width: none;">

    <div class="container-fluid" style="background-color: #FF8B28;">
        <div class="px-4 py-5 text-center shadow p-3 mb-5 rounded">
            <img class="d-block mx-auto mb-4" src="img/bee-svgrepo-com.svg" alt="" width="72" height="57">
            
                <h1 class="display-5 fw-bold lh-1 mb-3">Registration Enquiry</h1>
               
            <div class="col-lg-6 mx-auto">
                
                <p class="lead mb-4 mt-2">Enter a UK registration below to get live information.</p>
                <div class="d-grid gap-2 d-flex justify-content-center">
                    <form id="regForm" class="rounded" method="post" novalidate>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control form-control-lg" id="registration" name="registration" aria-describedby="usernameHelp" placeholder="." required>
                            <label for="username">Registration</label>
                        </div>
                        <button class="btn btn-success btn-lg" type="submit" name="submit" id="btnGetReg" value="submit" data-toggle="tooltip" data-placement="top" title="Reg" >Get Vehicle Information</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <?php
        // DECLARE variable and SET to 'registration' id tag from form
        $Registration = $_POST["registration"];

            if (empty($Registration))
            {
                Die();
            }
								            
            // INITIALISE Curl
            $curl = curl_init();
            
            // DECLARE Array
            curl_setopt_array($curl, array(
              // SET URL
              CURLOPT_URL => "https://driver-vehicle-licensing.api.gov.uk/vehicle-enquiry/v1/vehicles",
              // SET RETURN TO TRUE
              CURLOPT_RETURNTRANSFER => true,
              // IF Any specific encoding
              CURLOPT_ENCODING => "",
              // SET Maximum redirects before timeout
              CURLOPT_MAXREDIRS => 10,
              // SET TIMEOUT to 0
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              // SET HTTP VERSION
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              // POST request for sending data
              CURLOPT_CUSTOMREQUEST => "POST",
              // PARAMETERS for posting data - registration entered
              CURLOPT_POSTFIELDS =>"{\"registrationNumber\": \"$Registration\"}",
              // USE API Key to access API - API KEY IS HIGHLY SENSITIVE DO NOT EXPOSE
              CURLOPT_HTTPHEADER => array(
                "x-api-key: ggHTfPh9Hz6DDGCn5kvk76LV4VTAOkG89oVUZY6C",
                "Content-Type: application/json"
              ),
            ));

            // EXECUTE above commands and store inside variable
            $response = curl_exec($curl);

            $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            
            // CLOSE the statement
            curl_close($curl);	

        // GET Error code returned
        //var_dump(http_response_code());

        // Bad Request
        if ($httpcode === 400)
        {
            // DISPLAY error
            echo '<h3 class="text-light">Error: Bad Request</h3>';
        }
        // Forbidden
        if ($httpcode === 403)
        {
            // DISPLAY error
            echo '<h3 class="text-light">Error: Forbidden : Access Denied</h3>';
        }
        // Too many requests
        if ($httpcode === 429)
        {
            // DISPLAY error
            echo '<h3 class="text-light">Error: Too many requests, please wait.</h3>';
        }
        // Bad Gatway
        if ($httpcode === 502)
        {
            // DISPLAY error
            echo '<h3 class="text-light">Error: Bad Gateway</h3>';
        }
        // Gateway Timeout
        if ($httpcode === 504)
        {
            // DISPLAY error
            echo '<h3 class="text-light">Error: Gateway Timeout</h3>';
        }

        // Good
        if ($httpcode === 200)
        {
            // DISPLAY error
            echo '<h3 class="text-light text-center">Status: Success</h3>';
        }

        


        

        $string = $response;

        $json = json_decode($string, true);

        /* DEBUG - PRINT JSON TO SCREEN
            print_r($json);
        /*
        /*JSON ELEMENTS
            --registrationNumber,
            --taxStatus,
            taxDueDate,
            --motStatus,
            --make,
            --yearOfManufacture,
            --engineCapacity,
            --co2Emissions,
            --fuelType,
            --markedForExport,
            --colour,
            --typeApproval,
            --revenueWeight,
            --dateOfLastV5CIssued,
            --motExpiryDate,
            --wheelplan,
            --monthOfFirstRegistration
        */
    ?>
    
    <div id="" class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["registrationNumber"]); ?>" disabled>
                    <label class="fs-5" for="username">Registration</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["make"]); ?>" disabled>
                    <label class="fs-5" for="username">Vehicle Make</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["monthOfFirstRegistration"]); ?>" disabled>
                    <label class="fs-5" for="username">Date of Registration</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["yearOfManufacture"]); ?>" disabled>
                    <label class="fs-5" for="username">Year of Manufacture</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["engineCapacity"]); ?>" disabled>
                    <label class="fs-5" for="username">Cylinder Capacity</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["co2Emissions"]); ?> g/km" disabled>
                    <label class="fs-5" for="username">C02 Emissions</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["fuelType"]); ?>" disabled>
                    <label class="fs-5" for="username">Fuel Type</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["motStatus"]); ?>" disabled>
                    <label class="fs-5" for="username">MOT Status</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["motExpiryDate"]); ?>" disabled>
                    <label class="fs-5" for="username">MOT Expiry</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["taxStatus"]); ?>" disabled>
                    <label class="fs-5" for="username">Vehicle Status</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["taxDueDate"]); ?>" disabled>
                    <label class="fs-5" for="username">Tax Due Date</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["colour"]); ?>" disabled>
                    <label class="fs-5" for="username">Vehicle Colour</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["typeApproval"]); ?>" disabled>
                    <label class="fs-5" for="username">Vehicle Type</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["wheelplan"]); ?>" disabled>
                    <label class="fs-5" for="username">Wheelplan</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["revenueWeight"]); ?>" disabled>
                    <label class="fs-5" for="username">Revenue Weight</label>
                </div>
            </div>
            <div class="col-md-4 mx-auto">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control form-control-lg fw-bold pb-1" id="validationUsername" name="uname" aria-describedby="usernameHelp" value="<?php print_r ($json["dateOfLastV5CIssued"]); ?>" disabled>
                    <label class="fs-5" for="username">Date of last V5C</label>
                </div>
            </div>
        </div>
    </div>

    

    
       

            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</body>
</html>