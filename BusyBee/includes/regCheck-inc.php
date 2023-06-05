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
echo '<h3 class="text-light text-center">Error: Bad Request</h3>';
}
// Forbidden
if ($httpcode === 403)
{
// DISPLAY error
echo '<h3 class="text-light text-center">Error: Forbidden : Access Denied</h3>';
}
// Too many requests
if ($httpcode === 429)
{
// DISPLAY error
echo '<h3 class="text-light text-center">Error: Too many requests, please wait.</h3>';
}
// Bad Gatway
if ($httpcode === 502)
{
// DISPLAY error
echo '<h3 class="text-light text-center">Error: Bad Gateway</h3>';
}
// Gateway Timeout
if ($httpcode === 504)
{
// DISPLAY error
echo '<h3 class="text-light text-center">Error: Gateway Timeout</h3>';
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
--taxDueDate,
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