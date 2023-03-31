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
            if( result == "Record successfully saved!") {
                window.location = "/activity_website/controllers/OTP.php";
            } else {
                console.log(result);
            }  
        }
    });
});

$("#loginClient").on('click', () => {
    var sUsername = $("#loginUsername").val();
    var sPassword = $("#loginPassword").val();

    var sJsonData = {
        username: sUsername,
        password: sPassword,
    };

    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/loginAuth.php",
        data: sJsonData,
        success: (result) => {
                if( result == "Login Success") {
                    window.location = "/activity_website/index.php";
                } else if (result == "OTP Not Verified"){
                    alert("OTP not verified, please check you email.");
                } else {
                    alert("Login Failed");
                    console.log(result);
                }  
        }
    });
});

$("#verifyOTP").on('click', () => {
    var sOTP = $("#OTP").val();

    var sJsonData = {
        otp: sOTP,
    };

    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/OTPAuth.php",
        data: sJsonData,
        success: (result) => {
                if( result == "OTP Verified") {
                    console.log("OTP Verified! Oh Yeah!");
                    window.location = "/activity_website/controllers/login.php";
                } else {
                    alert("OTP not verified, please check you email.")
                    console.log(result);
                }   
        }
    });
});


// $('#logoutClient').on('click', () => {
//     $.ajax({
//         type: 'POST',
//         url: "/activity_website/controllers/logout.php",
//         success: (result) => {
//             if (result == "Session Aborted") {
//                 window.location = "/activity_website/controllers/login.php";
//             }else {
//                 console.log(result);
//             }
//         }
//     })
// })