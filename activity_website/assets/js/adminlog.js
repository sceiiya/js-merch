// ==================== ADMIN isting modal
  $("#AdminLogIn").on('click', () => {
    var aUname = $("#aUsername").val();
    var aPwd = $("#aPassword").val();

    var sAdminCred = {
        username: aUname,
        password: aPwd,
    };

    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/adminlog.php",
        data: sAdminCred,
        success: (result) => {
            if( result == "Record successfully saved!") {          
                // window.location = "/activity_website/controllers/OTP.php";
            }else {
                console.log(result);
            }  
        }
    });
});