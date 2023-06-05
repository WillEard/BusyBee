<?php

    include_once 'Navbar.php';
    include "classes/DB-class.php";
?>

<head>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body class="bg-dark" style="scrollbar-width: none;">

    <div class="container-fluid" style="background-color: #FF8B28;">
        <div class="px-4 py-3 text-center shadow p-3 mb-5 rounded">
            <img class="d-block mx-auto mb-2" src="img/bee-svgrepo-com.svg" alt="" width="72" height="57">
        </div>
    </div>

    <div class="container-fluid">
        <div class="container rounded" style="background-color: #FF8B28;">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide w-75 rounded py-2 px-2 mx-auto" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="https://placehold.co/600x400" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/600x400" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.co/600x400" class="d-block w-100 img-fluid" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center my-3 flex">
                    <div class="col mx-auto d-flex ">
                        <h2 class="fw-bold display-5 text-light me-2">Manufacturer</h2>
                        <h2 class="fw-bold display-5 text-light me-2">Model</h2>
                        <h2 class="fw-bold display-5 text-light me-2">Variant</h2>                        
                    </div> 
                    
                </div>
            </div>
            <div class="row align-items-center ">
                <div class="col">
                    <table class="table text-light">
                        <thead>
                            <tr>
                                <th scope="col"><h3 class="fw-bold">Summary</h3></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Manufacturer</th>
                                <td>[Data]</td>
                                <th scope="row">Model</th>
                                <td>[Data]</td>
                            </tr>
                                <tr>
                                <th scope="row">Variant</th>
                                <td>[Data]</td>
                                <th scope="row">Price</th>
                                <td>[Data]</td>
                            </tr>
                                <tr>
                                <th scope="row">Year</th>
                                <td>[Data]</td>
                                <th scope="row">Mileage</th>
                                <td>[Data]</td>
                            </tr>
                                <tr>
                                <th scope="row">Gearbox</th>
                                <td>[Data]</td>
                                <th scope="row">Fuel Type</th>
                                <td>[Data]</td>
                            </tr>
                                <tr>
                                <th scope="row">Engine Size</th>
                                <td>[Data]</td>
                                <th scope="row">Colour</th>
                                <td>[Data]</td>
                            </tr>
                            <tr>
                                <th scope="row">Category</th>
                                <td>[Data]</td>
                                <th scope="row">Registration</th>
                                <td>[Data]</td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

</body>
</html>