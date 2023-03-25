window.addEventListener('load', () => {

    fetch();

});

// function interval() {
//     setInterval("fetch()", 1000);
// }// window.addEventListener('load', () => {

//     interval();

// });

// function interval() {
//     setInterval("fetch()", 1000);
// }

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
