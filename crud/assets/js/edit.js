
function edit(nId) {
    var hiddenIndex = document.getElementById("indexer");
    hiddenIndex.value = nId;

    // var nIndex = {
    //     index: nId
    // };
    // // console.log(nIndex);
    // $.ajax({
    //     type: 'POST',
    //     url: "controllers/edit-selected.php",
    //     data: nIndex,
    //     success: (result) => {
    //         if (result == "error") {
    //             alert("Please call system admnistrator");
    //         } else {
    //         console.log(result);
    //         var keepsafe = document.getElementById("indexer");
    //         keepsafe.value = result[2];          
    //             window.location.replace("http://localhost/php-basics/edit.php");
    //         }
    //     }
    // });
    

}



$("#edit").on('click', () => {

    var nIndex = $("#indexer").val();
    var sFname = $("#firstName").val();
    var sLname = $("#lastName").val();
    var sEmail = $("#emailAddress").val();
    var sUsername = $("#username").val();
    console.log(nIndex);

    var sJsonData = {
        index: nIndex,
        fname: sFname,
        lname: sLname,
        email: sEmail,
        username: sUsername,
    }

    $.ajax({
        type: 'POST',
        url: "controllers/edit-save.php",
        data: sJsonData,
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
            console.log(result);   
                // window.location.replace("http://localhost/php-basics/registered.php");
            }
        }
    });

});

