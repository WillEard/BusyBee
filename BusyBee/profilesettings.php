<?php
    include_once 'Navbar.php';

    include "classes/DB-class.php";
    include "classes/profileinfo-class.php";
    include "classes/profileinfo-view-class.php";

    $profileInfo = new ProfileInfoView();
?>


<body class="bg-dark">
    <div class="container mt-5 text-light">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <h3 class="text-light display-5">My Settings</h3>
                <p>Edit your profile here</p>
                <hr/>
            </div>  
        </div>
    </div>

    <div class="container text-light">
        <div class="row">
            <div class="col col-md-5 mx-auto">
                <form class="mx-auto" action="includes/profileinfo-inc.php" method="post">
                    <div class="mb-3">
                        <h5 class="text-center">Profile Settings</h5>
                        <label for="exampleFormControlInput1" class="form-label">Profile Title</label>
                        <input type="text" class="form-control" name="profileTitle" id="profileTitle" placeholder="Your name here..." value="<?php $profileInfo->FetchTitle($_SESSION["userid"]); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Profile Intro</label>
                        <textarea class="form-control" name="profileIntro" id="profileIntro" rows="2" placeholder="Profile intro..."><?php $profileInfo->FetchText($_SESSION["userid"]); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Profile About Section</label>
                        <textarea class="form-control" name="profileAbout" id="profileAbout" rows="4" placeholder="About Me..."><?php $profileInfo->FetchAbout($_SESSION["userid"]); ?></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" name="submit" class="btn btn-primary mb-3">Save Information</button>
                    </div>
                </form>
            </div>
            <div class="col col-md-5 mx-auto">
            <form class="mx-auto" action="includes/profile-basic-info-inc.php" method="post">
                    <div class="mb-3">
                        <h5 class="text-center">Basic Information</h5>
                        <label for="exampleFormControlInput1" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="profileName" id="profileName" placeholder="" value="<?php $profileInfo->FetchName($_SESSION["userid"]); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Surname</label>
                        <input type="text" class="form-control" name="profileSurname" id="profileSurname" placeholder="" value="<?php $profileInfo->FetchSurname($_SESSION["userid"]); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" name="profilePhone" id="profilePhone" placeholder="" value="<?php $profileInfo->FetchPhone($_SESSION["userid"]); ?>">
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Show basic information to others</label>
                    </div><br>
                    
                    <div class="mb-3 text-center">
                        <button type="submit" name="submit" class="btn btn-primary mb-3">Save Information</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="container">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <h2 class="text-center display-6">Current Account Information</h2>
                        <hr/>
                        <form>
                            <div class="row">
                                <div class="form-group col-md-5 mx-auto">
                                    <label>First Name:</label>
                                    <input type='text' class='form-control' placeholder="First Name Here" value="<?php $profileInfo->FetchName($_SESSION["userid"]); ?>" readonly>
                                    <small id="firstnamesmalltext" class="form-text text-muted">First name associated with your account</small>
                                </div>
                                <div class="form-group col-md-5 mx-auto">
                                    <label for="">Surname:</label>
                                    <input type='text' class='form-control' placeholder="Surname" value="<?php $profileInfo->FetchSurname($_SESSION["userid"]); ?>" readonly>
                                    <small id="surnamesmalltext" class="form-text text-muted">Surname associated with your account</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-5 mx-auto">
                                    <label for="">Username:</label>
                                        <input type='text' class='form-control' placeholder='<?php echo $_SESSION["username"]; ?>' readonly>
                                        <small id="usernamesmalltext" class="form-text text-muted">The name that other users will see</small>
                                </div>
                                
                                <div class="form-group col-md-5 mx-auto">
                                    <label>Email Address:</label>
                                    <input type='email' class='form-control' placeholder='Email Here' readonly>
                                    <small id="emailsmalltext" class="form-text text-muted">The email address associated with your account</small>
                                </div>
                            </div>
                            <hr/>

                            <div class="row">
                                <div class="form-group col-md-5 mx-auto">
                                    <label>Change Password:</label>
                                    <button type="button" class="btn btn-md btn-outline-warning col-md-12" data-toggle="modal" data-target="#PasswordModal">Change Password</button>
                                    <small id="passwordsmalltext" class="form-text text-muted">Change the account password</small>

                                    <div class="modal fade" id="PasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="text-center mx-auto">Warning</h5>
                                                <h6 class="text-center text-danger">This can only be done once every 24 Hours.</h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button onclick="window.location.href='php-includes/ChangePasswordProcess.php';" type="button" class="btn btn-warning">Change Password</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            
                                <div class="form-group col-md-5 mx-auto">
                                    <label for="">Delete Account:</label>
                                    <button type="button" class="btn btn-md btn-outline-danger col-md-12" data-toggle="modal" data-target="#DeleteModal">Terminate Account</button>
                                    <small id="deleteaccountsmalltext" class="form-text text-muted">Permanently delete your account and all data</small>

                                    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Terminate Account</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="text-center mx-auto">Are you sure you want to delete your account?</h5>
                                                <h6 class="text-center text-danger">All data will be permanently lost.</h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button onclick="window.location.href='php-includes/DeleteProcessLoading.php';" type="button" class="btn btn-danger">Delete Account</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>  
                                    
                                </div>
                            </div>
                <hr/>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</body>
</html>