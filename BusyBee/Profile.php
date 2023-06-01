<?php
    include_once 'Navbar.php';

    include "classes/DB-class.php";
    include "classes/profileinfo-class.php";
    include "classes/profileinfo-view-class.php";

    $profileInfo = new ProfileInfoView();
?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/star-rating.css">
</head>
<body class="bg-dark" style="scrollbar-width: none;">
    <div class="container-fluid mt-5 text-light">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <h3 class="text-light display-5">Profile</h3>
                <hr/>
            </div>  
        </div>
    </div>

    <div class="container text-light mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="container pt-3 pb-3 rounded-top" style="background-color: #FF8B28;">
                    <img class="img rounded" src="https://placehold.co/200" alt="">
                    <br>
                        <a href="profilesettings.php" type="button" class="btn btn-sm btn-light mt-1">PROFILE SETTINGS</a>
                        <h4 class="pt-2 fw-bold">
                            <?php
                                $profileInfo->FetchTitle($_SESSION["userid"]);
                                echo '<br>';
                            ?>
                            </h4>
                            <h4>Bee-Gold Status: <span class="text-success">Active</span>/<span class="text-danger">Inactive</span></h4> <hr>
                            <h5>
                            <?php
                                $profileInfo->FetchText($_SESSION["userid"]);
                            ?>
                        </h4>                    
                </div>

                <div class="container pb-1 pt-1 rounded-bottom mb-3" style="background-color: #FF8B28;">
                    <h5 class="fw-bold"><strong>ABOUT</strong></h5>
                    <h6 class="lead"><em>
                        <?php
                            $profileInfo->FetchAbout($_SESSION["userid"]);
                        ?>
                        <hr/>
                    </em></h6>
                    <h5 class="fw-bold">FOLLOWERS</h5><h6>0</h6>
                    <h5 class="fw-bold">FOLLOWING</h5><h6>0</h6>
                    <h5 class="fw-bold">RATING</h5>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
            <div class="col-md-5 mx-auto">
                <div class="container-fluid rounded-top pb-1 pt-1" style="background-color: #FF8B28;">
                    <h5 class="text-center">Your Items For Sale</h5>
                </div><br>

                <div class="container-fluid rounded pb-1 pt-1 border border-danger">
                    <div class="row g-0 position-relative rounded mt-1">
                        <div class="col p-4 ps-md-0 text-center">
                            <h5 class="mt-0">You currently have no listings.</p>
                        </div>
                    </div>
                </div> 

                <!-- LISTING 1 
                <div class="container-fluid rounded pb-1 pt-1" style="background-color: #FF8B28;">
                    <div class="row g-0 position-relative rounded mt-1">
                        <div class="col-md-6 mb-md-0 p-md-2">
                            <img src="https://placehold.co/200" class="w-50 rounded" alt="...">
                        </div>
                        <div class="col-md-4 p-4 ps-md-0">
                            <h5 class="mt-0">Listing #??</p>
                            <h6>Item information here<h6>
                        </div>
                    </div>
                </div>   
                -->
                 
                
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</body>
</html>