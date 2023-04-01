window.addEventListener('load', () => {

    fetch();

});

// function interval() {
//     setInterval("fetch()", 1000);
// }

function fetch() {
    
    $.ajax({
        type: 'POST',
        url: "controllers/fetch.php",
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