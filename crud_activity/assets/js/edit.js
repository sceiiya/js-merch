
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



document.getElementById("edit").addEventListener('click', function() {

    var nIndex = document.getElementById("indexer").value;
    var sFname = document.getElementById("firstName").value;
    var sLname = document.getElementById("lastName").value;
    var sEmail = document.getElementById("emailAddress").value;
    var nNumber = document.getElementById("phoneNumber").value;
    console.log(nIndex);

    var sJsonData = {
        index: nIndex,
        fname: sFname,
        lname: sLname,
        email: sEmail,
        number: nNumber,
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

