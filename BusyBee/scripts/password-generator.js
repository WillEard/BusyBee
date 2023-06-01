function GeneratePassword() 
{
    var length = 32,
    charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?£$%^&*",
    retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) 
    {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    
    let copy = "<p class='text-dark'></p>";
    let result = copy.concat(retVal);

    document.getElementById("password").innerHTML = result;
}
