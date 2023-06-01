$(document).ready(function() 
{
    'use strict'

    $("#sell-form").validate(
    {
        rules: {
            registration: {
                required: true,
                minlength: 2,
                maxlength: 8
            },
            manufacturer: {
                required: true,
                minlength: 3,
                maxlength: 15
            },
            model: {
                required: true,
                minlength: 3,
                maxlength: 15
            },
            variant: {
                required: true,
                minlength: 3,
                maxlength: 15
            },
            price: {
                required: true,
                number: true,
                minlength: 2,
                maxlength: 10,
                range: [10.0, 9999999]
            },
            year: {
                required: true,
                number: true,
                minlength: 4,
                maxlength: 4
            },
            mileage: {
                required: true,
                number: true,
                minlength: 0,
                maxlength: 9999999
            },
            fuel: {
                required: true
            },
            gearbox: {
                required: true
            },
            enginesize: {
                required: true,
                number: true,
                minlength: 2,
                maxlength: 3,
                range: [0.5, 10.0]
            },
            colour: {
                required: true
            },
            category: {
                required: true
            }            
        },
        messages: {
            registration: {
                required: "<p>Please enter the registration</p>",
                minlength: "<p>Must have at least 2 characters</p>",
                maxlength: "<p>Maxmimum of 8 characters</p>"
            },
            manufacturer: {
                required: "<p>Please enter the manufacturer</p>",
                minlength: "<p>Must have at least 3 characters</p>",
                maxlength: "<p>Maxmimum of 15 characters</p>"
            },
            model: {
                required: "<p>Please enter the model</p>",
                minlength: "<p>Must have at least 3 characters</p>",
                maxlength: "<p>Maxmimum of 15 characters</p>"
            },
            variant: {
                required: "<p>Please enter the variant</p>",
                minlength: "<p>Must have at least 3 characters</p>",
                maxlength: "<p>Maxmimum of 15 characters</p>"
            },
            price: {
                required: "<p>Please enter the price</p>",
                minlength: "<p>Must have at least 2 characters</p>",
                maxlength: "<p>Maxmimum of 10 characters</p>",
                number: "<p>Numbers only</p>"
            },
            year: {
                required: "<p>Please enter the year</p>",
                minlength: "<p>Must have at least 4 characters</p>",
                maxlength: "<p>Maxmimum of 4 characters</p>",
                number: "<p>Numbers only</p>"
            },
            mileage: {
                required: "<p>Please enter the mileage</p>",
                minlength: "<p>Cannot be less than 0</p>",
                maxlength: "<p>Maxmimum of 7 characters</p>",
                number: "<p>Numbers only</p>"
            },
            fuel: {
                required: "<p>Please enter the fuel type</p>"
            },
            gearbox: {
                required: "<p>Please enter the gearbox type</p>"
            },
            enginesize: {
                equired: "<p>Please enter the engine size</p>",
                minlength: "<p>Must have at least 2 characters</p>",
                maxlength: "<p>Maxmimum of 3 characters</p>",
                number: "<p>Numbers only</p>"
            },
            colour: {
                required: "<p>Please enter the colour</p>"
            },
            category: {
                required: "<p>Please enter the category</p>"
            }            
        }
        
    });

    $("#submitbutton").click(function()
    {        
        /*
        $.post("includes/sell-inc.php",function(data)
        {
            alert(data);
        });
        */
    });
      
});