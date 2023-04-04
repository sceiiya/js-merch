
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
                    console.log("OTP Verified!");
                    alert("OTP Verified, please log in.")
                    window.location = "/activity_website/login.php";
                } else {
                    alert("OTP not verified, please check you email.")
                    console.log(result);
                }   
        }
    });
});


$('#resendOTP').on('click', () => {
    $.ajax({
        type:'POST',
        url: "/activity_website/controllers/resend_otp.php",
        success: (result) => {
            if( result == "sent") {
                alert("OTP sent, please check you email.");
            } else {
                console.log(result);
            }
        }
    })
})

$('#changePass').on('click', () => {
    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/fetchpass.php",
        success: (result) => {
            var objRes = JSON.parse(result);
            sPassword = $("#oldPass").val(objRes.ClientPassword);

            $('#changePassModal').modal('show');

            $('#saveNewPass').on('click', () => {
                var sPass = $('#newPass').val();

                var sJsonData = {
                    password: sPass,
                }

                $.ajax({
                    type:'POST',
                    url: "/activity_website/controllers/changepassword.php",
                    data: sJsonData,
                    success: (result) => {
                        if( result == "Password saved!") {
                            $('#changePassModal').modal('hide');
                            alert("Password changed successfully!");
                        } else {
                            console.log(result);
                        }
                    }
                })
            })
        }
    })
})

$('#newPass, #confirmPass').on('keyup', function () {
    if ($('#newPass').val() == $('#confirmPass').val()) {
      $('#message').html('Passwords match').css('color', 'green');
    } else 
      $('#message').html('Passwords does not match').css('color', 'red');
  });


function addToCart(nId) {
    var nIndex = {
        index: nId,
    }

    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/addtocart.php",
        data: nIndex,
        success: (result) => {
            if( result == "Added to cart") {
                alert("Added to cart!");
            } else {
                console.log(result);
            }
        }
    })

}


