$("#registerClient").on('click', () => {
    var sFullname = $("#fullNameClient").val();
    var sUsername = $("#usernameClient").val();
    var sEmail = $("#emailClient").val();
    var sPassword = $("#passwordClient").val();

    var sJsonData = {
        fullname: sFullname,
        username: sUsername,
        email: sEmail,
        password: sPassword,
    };

    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/saveRegClient.php",
        data: sJsonData,
        success: (result) => {
            if(result == "sent"){
                window.location = "/activity_website/OTP.php";
                console.log(result);
            }else {
                console.log(result);
            }  
        }
    });
});