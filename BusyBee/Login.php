<?php
    include_once 'Navbar.php';
?>
<head>
    <link rel="stylesheet" href="stylesheets/LoginSignup-Style.css">  
    <link rel="stylesheet" href="stylesheets/form-errors.css">  
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script type="text/javascript" src="scripts/login-form-validation.js"></script>
</head>
<body style="background-color: #FF8B28;">
    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Login</h1>
                    <hr/>
                    <p class="col-lg-10 fs-4">
                        <p class="text-dark">Forgot your username? <a href="#" class="text-dark text-decoration-none fw-bold" >Click here</a></p>
                        <hr class="">
                        <p class="text-dark">New here?<a href="#" class="text-dark text-decoration-none fw-bold"> Sign Up here</a></p>
                    </p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form id="signin-form" class="p-4 p-md-5 rounded" action="includes/login-inc.php" method="post" novalidate>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control has-validation" id="floatingUsername" name="uname" aria-describedby="usernameHelp" placeholder="Username" required>
                            <label for="floatingUsername">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control has-invalidation" id="floatingPassword" name="pass" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                            
                            <hr class="my-2">  
                            <h6 class="text-dark mt-1">Forgot your password? <a href="#" class="text-dark text-decoration-none fw-bold">Click here</a></h6>

                        </div>
                        <div class="checkbox mb-3">
                            <label>
                            <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-dark" type="submit" id="submitbutton">Sign In</button>
                        
                        <hr class="my-3">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    
</body>
</html>