<?php
    session_start();

    // RENAMING page titles based on page name
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    $index = substr($curPageName, 0, -4);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- REMOVE EXTENSIONS FOR URL -->
    <title><?php if ($index == "index"){  echo "Home"; } else { echo substr($curPageName, 0, -4);} ?></title>
    
    <!-- BOOTSTRAP / STYLING -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="stylesheets/navbar-style.css">

    <!-- jQuery -->

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>

<header>
    <div class="container-fluid bg-dark">
        <nav id="navborder" class="py-3 navbar navbar-dark navbar-expand-md sticky-top">
            <a href="index.php" class="navbar-brand text-light navhover">BusyBee</a>

            <img class="d-inline-block" width="30" height="30" src="img/bee-svgrepo-com.svg" alt="SVG"/>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="text-center ms-auto navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light navhover" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light navhover" href="Browse.php">Browse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light navhover" href="sell.php">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light navhover" href="BeeGold.php">Bee-<span class="text-warning">GOLD</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light navhover" href="RegCheck.php">Reg-Check</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light navhover" href="https://car-journey.comparethemarket.com/?AFFCLIE=IB36&wip=64767cb4cc5757597b7777dd#_=_">Quote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light navhover" href="#">Help</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto text-center ">
                    <?php
                        if(isset($_SESSION["userid"]))
                        {
                        
                    ?>
                        <li class="nav-item">
                            <div class="collapse navbar-collapse me-5" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Account
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-center bg-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="nav-link active navhover fw dropdown-item bg-dark mt-1" href="Profile.php"><?php echo $_SESSION["username"]; ?></a></li>
                                        <li><a class="nav-link active navhover dropdown-item bg-dark mt-1" href="includes/logout-inc.php">LOGOUT</a></li>
                                        <li><button class="btn btn-dark w-100 rounded-0 mt-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">About This App</button></li>
                                    </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                    <?php
                        }
                        else
                        {
                    ?>
                        <li class="nav-item">
                            <div class="collapse navbar-collapse me-5" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Account
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-center bg-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="nav-link active navhover fw dropdown-item bg-dark mt-1" href="Login.php">Login</a></li>
                                        <li><a class="nav-link active navhover dropdown-item bg-dark mt-1" href="SignUp.php">Sign Up</a></li>
                                        <li><button class="btn btn-dark w-100 rounded-0 mt-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">About This App</button></li>
                                    </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                    <?php
                        }
                    ?>

                <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header" style="background-color: #FF8B28;">
                    <h5 id="offcanvasRightLabel" class=" fw-bold">Technologies Used:</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body text-light">
                    <h2 class="fw-bold">Tools</h2>
                    <hr/>
                    <h3>HTML</h3>
                    <h3>CSS</h3>
                    <h3>Javascript</h3>
                    <h3>jQuery</h3>
                    <h3>Bootstrap</h3>
                    <h3>PHP</h3>
                    <h3>MySQL</h3>
                    <h3>PHPMyAdmin</h3>
                    <br>
                    <h2 class="fw-bold">Principles</h2>
                    <hr/>
                    <h3>Model-View-Controller</h3>
                    <h3>Object Oriented PHP</h3>
                    <br>
                    <h2 class="fw-bold">Features</h2>
                    <hr/>
                    <h3>Login/Signup System</h3>
                    <h3>Fully Responsive</h3>
                    <h3>Front-End Data Validation</h3>
                    <h3>Back-End Data Validation</h3>
                    <h3>Profile System</h3>
                    <h3>DVLA Enquiry API</h3>
                    <h3>Subscription Service</h3>
                    <h3>Advanced Filter/Search System</h3>
                    <h3>Password Reset System</h3>
                    <h3>Account Termination System</h3>
                    <h3>Vehicle Database</h3>
                </div>
                </div>
                </ul>
            </div>
        </nav>
    </div>
</header>