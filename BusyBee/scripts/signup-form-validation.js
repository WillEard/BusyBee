$(document).ready(function()
{
    'use strict'

    $("#signup-form").validate(
    {
        rules: {
            uname: {
                required: true,
                minlength: 6
            },
            pass: {
                required: true,
                minlength: 12,
                maxlength: 128
            },
            confirmpass: {
                required: true,
                minlength: 12,
                maxlength: 128
                //equalTo: "#pass"
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            uname: {
                required: "Username is required",
                minlength: "Minimum of 6 characters"
            },
            pass: {
                required: "Password is required",
                minlength: "Minimum of 12 characters",
                maxlength: "Maximum of 128 characters"
            },
            confirmpass: {
                required: "Confirm password is required",
                minlength: "Minimum length of 12 characters",
                maxlength: "Maximum of 128 characters"
                //equalTo: "Passwords must match"
            },
            email: {
                required: "Email is required",
                true: "Email must be valid"
            }
        }
    });

    $("#submitbutton").click(function()
    {
        
        $.post("includes/login-inc.php",function(data)
        {
            alert(data);
        });
        
    });
});