$(document).ready(function()
{
    'use strict'

    $("#signin-form").validate(
    {
        rules: {
            uname: {
                required: true
            },
            pass: {
                required: true
            }
        },
        messages: {
            uname: {
                required: "Username is required"
            },
            pass: {
                required: "Password is required"
            }
        }
    });

    $("#submitbutton").click(function()
    {
        /*
        $.post("includes/login-inc.php",function(data)
        {
            alert(data);
        });
        */
    });
});