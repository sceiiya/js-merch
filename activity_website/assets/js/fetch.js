window.addEventListener('load', () => {

    fetch();
    cartfetch()

});

// function interval() {
//     setInterval("fetch()", 1000);
// }

function fetch() {
    
    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/fetch.php",
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                // console.log(result);
                $(".card-cont-attr").html(result);
            }
        }
    });
}

function cartfetch() {
    
    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/client_cart_fetch.php",
        success: (result) => {
            if (result == "error") {
                alert("Please call system admnistrator");
            } else {
                // console.log(result);
                $("#cart-cont").html(result);
            }
        }
    });
}

function removeFromCart(nId) {
    var nIndex = {
        index: nId,
    }
}