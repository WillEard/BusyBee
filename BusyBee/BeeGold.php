<?php
    include_once 'Navbar.php';
?>
<head>
    <link rel="stylesheet" href="stylesheets/index.css">
</head>
<body class="bg-dark" style="scrollbar-width: none;">

    <div class="container-fluid" style="background-color: #FF8B28;">
        <div class="px-4 py-5 text-center">
            <img class="d-block mx-auto mb-4" src="img/bee-svgrepo-com.svg" alt="" width="72" height="57">
            <h1 class="display-5 fw-bold lh-1 mb-3">Pricing</h1>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-3 mb-4 text-center justify-content-evenly">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm text-dark" style="background-color: #FF8B28;">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Standard</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Free<small class="text-dark fw-light"></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Standard Helpline</li>
                        <li>Unlimited Sales</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-dark disabled">Standard By Default</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm bg-warning text-dark" style="background-color: #FF8B28;">
                    <div class="card-header py-3 bg-warning">
                        <h4 class="my-0 fw-normal">Bee-Gold</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">£9.99<small class="text-dark fw-light"></small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Priority Listing</li>
                            <li>Fraud Prevention</li>
                        </ul>
                        <button onclick="Payment()" type="button" class="w-100 btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</button>

                        <script>
                            function Payment() {
                                window.location.href='BeeGold-Payment.php';
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ml-2 mr-2 justify-content-center">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr class="text-light">
                            <th style="width: 34%;"></th>
                            <th style="width: 22%;">Standard</th>
                            <th style="width: 22%;">Bee-<span class="text-warning">Gold</span></th>
                        </tr>
                    </thead>
                    <tbody class="text-light">
                        <tr>
                            <th scope="row" class="text-start">Standard Helpine</th>
                            <td><img src="img/checkmark-svgrepo-com.svg" width="24" height="24" alt=""></td>
                            <td><img src="img/checkmark-svgrepo-com.svg" width="24" height="24" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Unlimited Listing</th>
                            <td><img src="img/checkmark-svgrepo-com.svg" width="24" height="24" alt=""></td>
                            <td><img src="img/checkmark-svgrepo-com.svg" width="24" height="24" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Priority Listing</th>
                            <td ><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                            <td><img src="img/checkmark-svgrepo-com.svg" width="24" height="24" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Unique Profile</th>
                            <td></td>
                            <td><img src="img/checkmark-svgrepo-com.svg" width="24" height="24" alt=""></td>
                        </tr>
                    </tbody>

                    <tbody class="text-light">
                        <tr>
                            <th scope="row" class="text-start">24/7 Helpline</th>
                            <td></td>
                            <td><img src="img/checkmark-svgrepo-com.svg" width="24" height="24" alt=""></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Fraud Prevention</th>
                            <td></td>
                            <td><img src="img/checkmark-svgrepo-com.svg" width="24" height="24" alt=""></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container ">
        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #FF8B28;">
                        <h5 class="modal-title" id="exampleModalLabel">Bee-Gold Subscription</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-dark text-light text-center">
                    <?php 
                        if(isset($_SESSION["userid"]))
                        {
                        echo '<p class="fw-bold">You already have Bee-Gold!</p>';


                        exit();
                        }
                        else
                        {
                        echo '<p class="fw-bold">Please login to subscribe!</p>';
                        }
                        
                    ?>
                        
                    </div>
                    <div class="modal-footer bg-dark">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>