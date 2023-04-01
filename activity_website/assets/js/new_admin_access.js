$('#addNewAdmin').on('click', () => {
    $('#ConfirmNewAdminModal').modal('show');
});

$('#addNotSure').on('click', () => {
    $('#ConfirmNewAdminModal').modal('hide');
});  



$("#confirm_new_admin").on('click', () => {

    var aFullname = $("#AdminName").val();
    var aUsername = $("#AdminUname").val();
    var aEmail = $("#AdminEmail").val();
    var aPosition = $("#AdminPosition").val();

    var sNewAdminCreds = {
        adName: aFullname,
        adUname: aUsername,
        adEmail: aEmail,
        adPosition: aPosition,
    };
if (aFullname != '' && aUsername != '' && aEmail != '' && aPosition != ''&& aPosition != 'null' ) {
    
    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/new_admin_access.php",
        data: sNewAdminCreds,
        success: (result) => {
            if( result == true) {
                console.log(result);
            } else if ( result == "Incomplete credentials") {
                alert("Please fill out all fields");
            } else if ( result == "Admin already exist") {
                alert("Admin already exist");
                $('#ConfirmNewAdminModal').modal('hide');
            }else if ("New Admin added!"){
                alert("New Admin added!");
                $('#ConfirmNewAdminModal').modal('hide');
            }else{
                console.log(result);
            }
        }
    });
} else {
    alert("Please fill out all the fields!");
    $('#ConfirmNewAdminModal').modal('hide');
}

});
