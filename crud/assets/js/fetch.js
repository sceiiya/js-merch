window.addEventListener('load', () => {

    interval();

});

function interval() {
    setInterval("fetch()", 1000);
}

function fetch() {
    
    $.ajax({
        type: 'POST',
        url: "controllers/fetch.php",
        beforeSend: () => {
            // document.getElementById("div-data").innerHTML =`<div class="spinner-border text-primary" role="status">
            //         <span class="visually-hidden">Loading...</span>
            //     </div>`;
        },
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                // console.log(result);
                document.getElementById("div-data").innerHTML = result;
            }
        }
    });
}

function del(nId) {
    var nIndex = {
        index: nId
    };
    // console.log(nIndex);
    $.ajax({
        type: 'POST',
        url: "controllers/delete.php",
        data: nIndex,
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                document.getElementById("div-data").innerHTML = result;
                
            }
        }
    });
}

function edit(nId) {
    var hiddenIndex = document.getElementById("indexer");
    hiddenIndex.value = nId;

        $.ajax({
        type: 'POST',
        url: "controllers/edit-selected.php",
        data: {nid: nId},
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                var objRes = JSON.parse(result);
                sFname = $("#firstName").val(objRes.first_name);
                sLname = $("#lastName").val(objRes.last_name);
                sUsername = $("#userName").val(objRes.username);
                sEmail = $("#emailAddress").val(objRes.email);
                
                $('#myModal').modal('show');
                
                $("#edit").on('click', () => {

                    var nIndex = $("#indexer").val();
                    var sFname = $("#firstName").val();
                    var sLname = $("#lastName").val();
                    var sEmail = $("#emailAddress").val();
                    var sUsername = $("#userName").val();
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
                                $('#myModal').modal('hide');
                                fetch()
                                
                            }
                        }
                    });

                });
            }
        }
    });

}