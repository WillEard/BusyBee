<?php
    include_once 'Navbar.php';
?>

<head>
    <link rel="stylesheet" href="BeeGoldPayment-style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>
        window.onload = function()  {
            document.getElementById("processing").style.display='none';
        };
    </script>
</head>

<body class="bg-dark">

<div id="container" class="container mt-5 px-5">
    <div class="mb-4">
        <h2 style="color: #FF8B28;">Confirm order and pay</h2>
        <span style="color: #FF8B28;">Please make the payment, after that you can enjoy all the features and benefits.</span>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card p-3">
                <h6 class="text-uppercase">Payment details</h6>
                <div class="inputbox mt-3"> 
                    <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputbox mt-3 mr-2"> 
                            <input type="text" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div class="inputbox mt-3 mr-2"> 
                                <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span>
                            </div>
                            <div class="inputbox mt-3 mr-2 ms-2"> 
                                <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> 
                            </div>
                        </div>
                </div>
            </div>
            <div class="mt-4 mb-4">
                <h6 class="text-uppercase">Billing Address</h6>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Street Address</span> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputbox mt-3 mr-2"> 
                        <input type="text" name="name" class="form-control" required="required"> <span>City</span> 
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="inputbox mt-3 mr-2"> 
                        <input type="text" name="name" class="form-control" required="required"> <span>State/Province</span> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="inputbox mt-3 mr-2"> 
                        <input type="text" name="name" class="form-control" required="required"> <span>Zip code</span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="text-light">
    <div class="mt-4 mb-4 d-flex justify-content-center">
        <button onclick="hide()" class="btn btn-success btn-lg px-3 text-dark" style="background-color: #FF8B28;">Pay</button>
    </div>
</div>

<div class="col-md-4">
    <div class="card card-blue p-3 text-white mb-3" style="background-color: #FF8B28;">
        <span class="text-dark">You have to pay</span>
        <div class="d-flex flex-row align-items-end mb-3">
            <h1 class="mb-0 text-dark fw-bold">£9</h1> <span class="text-dark">.99</span>
        </div>
        <span class="text-dark">Enjoy all the premium features and perks after you complete the payment</span>
        <div class="hightlight"><br>
            <span>100% Guarantee & Tech support.</span>
        </div>
    </div>
</div>



</div>

</div>

<div id="processing" class="container mt-5">
    <div class="d-flex justify-content-center">
        <span class="text-light display-6">Processing Payment</span>
        <div class="spinner-border ms-2" style="color: #FF8B28; width: 3rem; height: 3rem;" role="status">
        </div>
    </div>
</div>

<script>
    function hide() 
    {
        document.getElementById("container").hidden = true;
        document.getElementById("processing").style.display = "block";
    }
</script>

<script>
    var valcode = document.querySelector("#discount")
    var namecode = document.querySelector("#code")
    namecode.textContent = valcode.value

    var closeBtn = document.querySelector(".close")
    var couponCode = document.querySelector(".couponCode")

    closeBtn.addEventListener("click", function () {
    close()
    })
    valcode.addEventListener("change", function () {
    checkDiscountCoupon()
    })

    function checkDiscountCoupon() {
    if (valcode.value.length === 0) {
    // namecode.style.display = "none"
    close()
    }
    else {
    couponCode.classList.remove("d-none")
    namecode.style.display = "inline"
    namecode.textContent = valcode.value
    }
    }

    function close() {
    couponCode.classList.add("d-none")
    valcode.value = ""
    }
</script>


</body>