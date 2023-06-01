<?php
    include_once 'Navbar.php';
?>
<head>
    <link rel="stylesheet" href="stylesheets/LoginSignup-Style.css">  
    <link rel="stylesheet" href="stylesheets/form-errors.css">  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script type="text/javascript" src="scripts/signup-form-validation.js"></script>
</head>
<body style="background-color: #FF8B28; scrollbar-width: none;">
    <div class="container-fluid">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <?php
                if (isset($_GET["error"]))
                {
                    // IF message is emptyInp
                    if ($_GET["error"] == "emptyinput")
                    {
                        //DISPLAY empty fields error
                        echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Empty Fields!</div>";
                    }
                    if ($_GET["error"] == "invalidusername")
                    {
                        //DISPLAY empty fields error
                        echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Invalid Username!</div>";
                    }
                    if ($_GET["error"] == "invalidemail")
                    {
                        //DISPLAY empty fields error
                        echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Invalid Email!</div>";
                    }
                    if ($_GET["error"] == "incorrectpass")
                    {
                        //DISPLAY empty fields error
                        echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Passwords do not match!</div>";
                    }
                    if ($_GET["error"] == "usernameoremailtaken")
                    {
                        //DISPLAY empty fields error
                        echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Email already taken!</div>";
                    }
                    if ($_GET["error"] == "passwordnotsecure")
                    {
                        //DISPLAY empty fields error
                        echo "<div class='mx-auto alert alert-danger' role='alert'>Error: Password is not secure! Must be greater than 5 characters</div>";
                    }
                }
            ?> 
            <div class="row align-items-center g-lg-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Sign Up</h1>
                    <hr/>
                    <p class="text-dark">Forgot your username? <a href="#" class="text-dark text-decoration-none fw-bold" >Click here</a></p>
                    <hr class="my-1 mb-3">    
                    <p class="text-dark">New here?<a href="#" class="text-dark text-decoration-none fw-bold" > Sign Up here</a></p>
                </div>
                
                <div class="col-md-10 mx-auto col-lg-6">

                    <form id="signup-form" class="p-4 p-md-5 rounded needs-validation" action="includes/signup-inc.php" method="post" novalidate>
                        <p class="fw-bold text-center"> -Fields with a (*) are required- </p>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control has-validation" id="validationUsername" name="uname" aria-describedby="usernameHelp" placeholder="Username" required>
                            <label for="username">Username *</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control has-invalidation" id="validationPassword" name="pass" placeholder="Password" required>
                            <label for="password">Password *</label>
                            
                        </div>
                        <div class="form-floating mb-3 ">
                            <input type="password" class="form-control has-validation" id="validationConfirmPassword" name="confirmpass" aria-describedby="passwordhelp" placeholder="Confirm Password" required>
                            <label for="floatingUsername">Confirm Pass *</label>
                            

                            <div class="text-center">
                                <button type="button" class="btn btn-sm btn-dark mt-2 " onclick="GeneratePassword()">Generate Password</button><br>
                                <p id="password"><strong></strong></p>
                                <script src="scripts/password-generator.js"></script>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control has-validation" id="validationEmail" name="email" placeholder="E-mail Address" required>
                            <label for="floatingUsername">Email *</label>
                        </div>
                        
                        <button class="w-100 btn btn-lg btn-dark mb-1" type="submit" name="submit">Sign Up</button>
                        
                        <small class="text-dark">By clicking Sign up, you agree to the terms of use.</small>
                        <hr class="my-2">
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>