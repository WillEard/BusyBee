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
    
<section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #FF8B28; height:200px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
              <img src="https://placehold.co/200"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                style="width: 150px; z-index: 1">
              <a href="profilesettings.php" type="button" class="btn btn-dark" data-mdb-ripple-color="dark"
                style="z-index: 1;">
                Edit profile
            </a>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
              <h5>
                <?php
                    echo $profileInfo->FetchTitle($_SESSION["userid"]);
                    echo '<br>';
                ?>
              </h5>
              <p>[LOCATION]</p>
            </div>
          </div>
          
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1">
              <div>
                <p class="mb-1 h5">XX</p>
                <p class="small text-muted mb-0">Sales</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">XX</p>
                <p class="small text-muted mb-0">Followers</p>
              </div>
              <div>
                <p class="mb-1 h5">XX</p>
                <p class="small text-muted mb-0">Following</p>
              </div>
            </div>
            <div class="d-flex justify-content-start text-center py-1">
                <div>
                    <p class="mb-1 h5">Bee-Gold Member:<span class="text-success">Yes</span></p>
                    <p class="mb-1 h5">Rating: </span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span></p>
                </div>
            </div>
          </div>
          
          <div class="card-body p-4 text-black">
            <div class="mb-3">
              <p class="lead fw-bold mb-1">About</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">
                    <?php $profileInfo->FetchText($_SESSION["userid"]); ?>
                </p>
              </div>
            </div>
            <div class="mb-5">
              <p class="lead fw-bold mb-1">Bio</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">
                    <?php $profileInfo->FetchAbout($_SESSION["userid"]); ?>
                </p>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-bold mb-0">For Sale</p>
            </div>
            <div class="row g-2">
                <!-- 0 LISTINGS
                    <div class="container-fluid rounded pb-1 pt-1 border border-danger">
                        <div class="row g-0 position-relative rounded mt-1">
                            <div class="col p-4 ps-md-0 text-center">
                                <h5 class="my-0">You currently have no listings.</p>
                            </div>
                        </div>
                    </div> 
                -->

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

            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</body>
</html>