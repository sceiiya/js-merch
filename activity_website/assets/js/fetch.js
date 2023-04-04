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
        url: "/activity_website/controllers/cart_fetch.php",
        success: (result) => {
            var dataArr = result;
            console.log(JSON.parse(dataArr));

            var JsonArr = JSON.parse(dataArr);

            var sHtml = "";
            sHtml = `
            <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            `;
            priceCount = 0;
            for(i=0; i<JsonArr.length; i++) {
                var productName = JsonArr[i].ProductName;
                var productDesc = JsonArr[i].ProductDescription;
                var productPrice = JsonArr[i].ProductPrice;
                var productPhoto = JsonArr[i].ProductPhoto;
                var productQuantity = JsonArr[i].ProductQuantity;

             sHtml += `<tr>
                        <td>
                            <div class="cart-info">
                            <div class="cart_item-img-cont"><img class="cart_item-img-main" src="/activity_website/admin/listing/product_img/${productPhoto}"></div>

                                <div>
                                    <p>${productName}</p>
                                    <small>${productDesc}</small>
                                    <br>
                                    <small>₱ ${productPrice}</small>
                                    <br>
                                    <a href="#!" onclick="removeFromCart(${JsonArr[i].CartId})">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" class="inputforcart" id="input${i}" onkeyup="compute(${i})" onchange="compute(${i})" value="1" min="1" max="${productQuantity}"></td>
                        <td>₱ ${productPrice}</td>
                    </tr>
                    `;
            
            priceCount += parseInt(productPrice);
            }
            sHtml += `</table>
        
                <div class="total-price">

                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>₱ ${priceCount}</td>
                        </tr>
                        <tr>
                            <td>Discounts</td>
                            <td>₱ 0.00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td id="cartTotal">₱ ${priceCount}</td>
                        </tr>
                    </table>
                </div>
                <div id="btnDiv">
                    <button id="btn-purchase">Place Order</button>
                </div>
                `;

            
            $("#cart-cont").html(sHtml);

            $('.inputforcart').on('keyup', () => {

            var allTotal = 0;

            for ( i = 0; i < JsonArr.length; i++ ) {
                var price = JsonArr[i].ProductPrice;
                console.log(JsonArr[i].ProductPrice);
                var quantity = document.getElementById('input' + i).value;
                console.log(quantity);
                console.log(price);
                var total = price * quantity;
                console.log("total = " + total);
                allTotal += total;
                console.log("alltotal = " + allTotal);
            }

            document.getElementById('cartTotal').innerHTML = allTotal;
            })
        }
    });
}

function removeFromCart(nId) {
    var nIndex = {
        index: nId,
    }
}

// function cartfetch() {
    
//     $.ajax({
//         type: 'POST',
//         url: "/activity_website/controllers/client_cart_fetch.php",
//         success: (result) => {
//             if (result == "error") {
//                 alert("Please call system admnistrator");
//             } else {
//                 // console.log(result);
//                 $("#cart-cont").html(result);
//             }
//         }
//     });
// }