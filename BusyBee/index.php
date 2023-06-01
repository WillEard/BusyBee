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
            <?php 
                if(isset($_SESSION["userid"]))
                {
                echo ' <h1 class="display-5 fw-bold lh-1 mb-3">Welcome, ' . $_SESSION["username"]; '</h1> ';
                }
                else
                {
                echo '<h1 class="display-5 fw-bold lh-1 mb-3">Welcome to BusyBee!</h1>';
                }
                ?>
            <div class="col-lg-6 mx-auto">
                <hr/>
                <p class="lead mb-4 mt-2">Buying? Selling? We do it all.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="Browse.php" type="button" class="btn btn-dark btn-lg px-4 gap-3">Get Started</a>
                </div>
            </div>
            
        </div>
            
    </div>

    <div class="container-fluid" style="color: #FF8B28;">
        <div class="container col-xxl-8 px-4 py-1">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="img/PoloDark.png" class="d-block mx-lg-auto img-fluid ms-4 " alt="Bootstrap Themes" width="800" height="600" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">What are we about?</h1>
                    <hr/>
                    <p class="lead">Buying? Selling? Use BusyBee to solve all your car trade problems. <br><br>
                    We support all vehicle types, and finance quotes to make it as easy as possible.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        if(!isset($_SESSION["userid"]))
        {
            echo '<div class="container col-xl-8 col-xxl-8 px-5 py-5 mt-2 shadow p-3 mb-5 rounded" style="background-color: #FF8B28;">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-6 text-center text-lg-start" >
                    <h1 class="display-4 fw-bold lh-1 mb-3">Got an account? Login right here!</h1>
                    <p class="col-lg-10 fs-4">New here? Click below to sign up!</p>
                    <p class="col-lg-10 fs-4"><button class="w-50 btn btn-lg btn-dark" type="submit">Sign up</button></p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5  rounded-3" style="background-color: #FF8B28;" action="includes/login-inc.php" method="post" novalidate>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="uname">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-dark" type="submit">Sign In</button>
                    <hr class="my-4">
                    <small class="text-dark">Forgot your password? <a class="text-dark" href="">Click here.</a></small>
                    </form>
                </div>
            </div>
        </div>   ';
        }
        else
        {
            echo '<div class="container col-xl-8 col-xxl-8 px-5 py-5 mt-2 rounded" style="background-color: #FF8B28;">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start" > '; 
                    
                    echo '<h1 class="display-5 fw-bold lh-1 mb-3">' . $_SESSION["username"];'</h1> ';
                    
                    echo '<p class="col-lg-10 fs-4 mt-2 fst-italic">Keep an eye out for unique offers.</p>

                          <a href="#" class="col-lg-10 fs-5 mt-2 text-decoration-none text-dark">Found a problem? Report it here</a>
                </div>
                <div class="col-md-10 mx-auto col-lg-5 text-center">
                    <button class="w-75 btn btn-lg btn-dark mb-1" type="submit">Browse</button>
                    <button class="w-75 btn btn-lg btn-dark mt-1" type="submit">Sell</button>
                </div>
            </div>
        </div>   ';
        }
    ?>
       

    <div class="container-fluid mt-5" style="color: #FF8B28;">
        <div class="px-4 py-5 text-center">
            <img class="d-block mx-auto mb-4" src="img/bee-svgrepo-com.svg" alt="" width="72" height="57">
            <h1 class="display-4 fw-bold lh-1 mb-3">ICE's, Hybrids EV's</h1>

            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4 mt-2">Browse a wide range of cars using ICE's and EV types!</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                </div>
            </div>

            <div class="container">
                <div class="row ml-3 mr-3 justify-content-evenly">
                    <div class="col-md-4">
                        <div class="card mb-3 text-dark border border-dark shadow p-3 mb-5  rounded " style="background-color: #FF8B28;">
                            <img src="img/fuel.png" class="img-fluid w-25 rounded-top mx-auto d-block mt-3" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Petrol/Diesel</h4> 
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorum nam possimus deleniti ex ea in</p>
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 text-dark border border-dark shadow p-3 mb-5 rounded" style="background-color: #FF8B28;">
                            <img src="img/plug.png" class="img-fluid w-25 rounded-top mx-auto d-block mt-3" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Electric</h4> 
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorum nam possimus deleniti ex ea in</p>
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 text-dark border border-dark shadow p-3 mb-5 rounded" style="background-color: #FF8B28;">
                            <img src="img/hybrid.png" class="img-fluid w-25 rounded-top mx-auto d-block mt-3" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Hybrid</h4> 
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem dolorum nam possimus deleniti ex ea in</p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-xl-8 col-xxl-8 px-5 py-4 mt-2 shadow p-3 mb-5 rounded" style="background-color: #FF8B28;">
        <h2 class="fw-bold text-center">FAQ</h2>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item" style="background-color: #FF8B28;">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed text-light bg-dark rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    What is BusyBee?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body bg-dark text-light">BusyBee is a car E-Commerce platform, allowing you to buy and sell just about any type of car.</div>
                </div>
            </div>
            <div class="accordion-item" style="background-color: #FF8B28;">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed text-light bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    How does it work?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body bg-dark text-light">Visit the browsing page <a href="">here.</a> Find a vehicle that you like; Then follow the steps needed to make it yours!<br>
                    If you're looking to sell, visit the processing page <a href="">here.</a> Follow the steps to list it for other buyers to see! <br><br>
                    Found a bug? Report it <a href="">here.</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item" style="background-color: #FF8B28;">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed text-light bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Is it free?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body bg-dark text-light">Its totally free to use! Although we have a subscription service with additional benefits, the service is completely free to use.</div>
                </div>
            </div>
            <div class="accordion-item" style="background-color: #FF8B28;">
                <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed text-light bg-dark rounded-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Can any car be listed?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body bg-dark text-light">Yes! As long as the vehicle is registered in the UK, it can be listed here. Any type ranging from Petrol, Diesel, EV, Hybrid and even Hydrogen!</div>
                </div>
            </div>
        </div>     
    </div>

    <div class="container-fluid text-center mb-3">
        <div class="row">
            <div class="col">
                <a href="#" class="btn text-dark mt-5" style="background-color: #FF8B28;" type="submit">Back to top</a>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #2f3236; color: #FF8B28;">
        <footer class="py-5">
            <div class="row">
                <div class="col-md-3 col-md-2 mb-3">
                    <h5>Main</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Browse</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sell</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-md-2 mb-3">
                    <h5>Features</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bee-Gold</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">RegCheck</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Help</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-50 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn text-dark" style="background-color: #FF8B28;" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>© 2023 BusyBee, Inc. All rights reserved.</p>
            </div>
        </footer>
    </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</body>
</html>