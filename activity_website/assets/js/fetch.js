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
            // console.log(JSON.parse(dataArr));

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
            for (i = 0; i < JsonArr.length; i++) {
                var productName = JsonArr[i].ProductName;
                var productDesc = JsonArr[i].ProductDescription;
                var productPrice = JsonArr[i].ProductPrice;
                var productPhoto = JsonArr[i].ProductPhoto;
                var productQuantity = JsonArr[i].ProductQuantity;
                // var clientID = JsonArr[i].ClientId;

                sHtml += `<tr>
                        <td>
                            <div class="cart-info">
                            <div class="checkout_cart-cont"><img class="cart_item-img-main" src="/activity_website/admin/listing/product_img/${productPhoto}"></div>

                                <div>
                                    <p id="pNameInfo${i}">${productName}</p>
                                    <small>${productDesc}</small>
                                    <br>
                                    <small id="pPriceInfo${i}">₱ ${productPrice.toLocaleString()}</small>
                                    <br>
                                    <a href="#!" onclick="removeFromCart(${JsonArr[i].CartId})">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" class="inputforcart" id="input${i}" value="1" min="1" max="${productQuantity}" oninput="valueCalc(${i})"></td>
                        <td id="subinput${i}">₱ ${productPrice.toLocaleString()}</td>
                    </tr>
                    `;

                priceCount += parseInt(productPrice);
            }
            sHtml += `</table>
        
                <div class="total-price">

                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td id="subTotal">₱ ${priceCount.toLocaleString()}</td>
                        </tr>
                        <tr>
                            <td>Discounts</td>
                            <td>₱ 0.00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td id="cartTotal">₱ ${priceCount.toLocaleString()}</td>
                        </tr>
                    </table>
                </div>
                <div id="btnDiv">
                    <button id="btn-order" onclick="placeOrder(${JsonArr.ClientId})">Checkout</button>
                </div>
                `;


            $("#cart-cont").html(sHtml);

            // function valueCalc(cId) {
            //     console.log(cId);
            //     var allTotal = 0;

            //     for (i = 0; i < JsonArr.length; i++) {
            //         var price = JsonArr[i].ProductPrice;
            //         // console.log(JsonArr[i].ProductPrice);
            //         var quantity = document.getElementById('input' + i).value;
            //         // console.log(quantity);
            //         // console.log(price);
            //         var total = price * quantity;
            //         // console.log("total = " + total);
            //         allTotal += total;
            //         // console.log("alltotal = " + allTotal);
            //     }
            //     document.getElementById('subTotal').innerHTML = "₱ " + allTotal.toLocaleString();
            //     document.getElementById('cartTotal').innerHTML ="₱ " +  allTotal.toLocaleString();

            //     // var subTotal = 0;

            //     for (i = 0; i < JsonArr.length; i++) {
            //         var subprice = JsonArr[i].ProductPrice;
            //         // console.log(JsonArr[i].ProductPrice);
            //         var subquantity = document.getElementById('input' + i).value;
            //         // console.log(quantity);
            //         // console.log(price);
            //         var subtotal = subprice * subquantity;
            //         // console.log("total = " + total);
            //         // allTotal += total;
            //         // console.log("alltotal = " + allTotal);
            //         document.getElementById('subinput' + i).innerHTML = "₱ " + subtotal.toLocaleString();
            //     }
            // }

            // $('.inputforcart').on('keyup', () => {

            //     var allTotal = 0;

            //     for (i = 0; i < JsonArr.length; i++) {
            //         var price = JsonArr[i].ProductPrice;
            //         // console.log(JsonArr[i].ProductPrice);
            //         var quantity = document.getElementById('input' + i).value;
            //         // console.log(quantity);
            //         // console.log(price);
            //         var total = price * quantity;
            //         // console.log("total = " + total);
            //         allTotal += total;
            //         // console.log("alltotal = " + allTotal);
            //     }
            //     document.getElementById('subTotal').innerHTML = "₱ " + allTotal.toLocaleString();
            //     document.getElementById('cartTotal').innerHTML ="₱ " +  allTotal.toLocaleString();

            //     // var subTotal = 0;

            //     for (i = 0; i < JsonArr.length; i++) {
            //         var subprice = JsonArr[i].ProductPrice;
            //         // console.log(JsonArr[i].ProductPrice);
            //         var subquantity = document.getElementById('input' + i).value;
            //         // console.log(quantity);
            //         // console.log(price);
            //         var subtotal = subprice * subquantity;
            //         // console.log("total = " + total);
            //         // allTotal += total;
            //         // console.log("alltotal = " + allTotal);
            //         document.getElementById('subinput' + i).innerHTML = "₱ " + subtotal.toLocaleString();
            //     }


            // })

            // $('.inputforcart').on('change', () => {

            //     var allTotal = 0;

            //     for (i = 0; i < JsonArr.length; i++) {
            //         var price = JsonArr[i].ProductPrice;
            //         console.log(JsonArr[i].ProductPrice);
            //         var quantity = document.getElementById('input' + i).value;
            //         // console.log(quantity);
            //         // console.log(price);
            //         var total = price * quantity;
            //         // console.log("total = " + total);
            //         allTotal += total;
            //         // console.log("alltotal = " + allTotal);
            //     }
            //     document.getElementById('subTotal').innerHTML = "₱ " + allTotal.toLocaleString();
            //     document.getElementById('cartTotal').innerHTML = "₱ " + allTotal.toLocaleString();

            //     for (i = 0; i < JsonArr.length; i++) {
            //         var subprice = JsonArr[i].ProductPrice;
            //         // console.log(JsonArr[i].ProductPrice);
            //         var subquantity = document.getElementById('input' + i).value;
            //         // console.log(quantity);
            //         // console.log(price);
            //         var subtotal = subprice * subquantity;
            //         // console.log("total = " + total);
            //         // allTotal += total;
            //         // console.log("alltotal = " + allTotal);
            //         document.getElementById('subinput' + i).innerHTML = "₱ " + subtotal.toLocaleString();
            //     }
            // })
        }
    });
}

function valueCalc(nId) {

    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/cart_fetch.php",
        success: (result) => {
            var dataArr = result;
            // console.log(JSON.parse(dataArr));
            var JsonArr = JSON.parse(dataArr);
            // console.log(JsonArr);
            
            var allTotal = 0;

            for (i = 0; i < JsonArr.length; i++) {
                var price = JsonArr[i].ProductPrice;
                // console.log(JsonArr[i].ProductPrice);
                var quantity = document.getElementById('input' + i).value;
                // console.log(quantity);
                // console.log(price);
                var total = price * quantity;
                // console.log("total = " + total);
                allTotal += total;
                // console.log("alltotal = " + allTotal);
            }
            document.getElementById('subTotal').innerHTML = "₱ " + allTotal.toLocaleString();
            document.getElementById('cartTotal').innerHTML ="₱ " +  allTotal.toLocaleString();
        
            // var subTotal = 0;
        
            for (i = 0; i < JsonArr.length; i++) {
                var subprice = JsonArr[i].ProductPrice;
                // console.log(JsonArr[i].ProductPrice);
                var subquantity = document.getElementById('input' + i).value;
                // console.log(quantity);
                // console.log(price);
                var subtotal = subprice * subquantity;
                // console.log("total = " + total);
                // allTotal += total;
                // console.log("alltotal = " + allTotal);
                document.getElementById('subinput' + i).innerHTML = "₱ " + subtotal.toLocaleString();
            }
        }
    })
            
    var prodName = document.getElementById('pNameInfo' + nId).innerText;
    var prodPrice = document.getElementById('pPriceInfo' + nId).innerText;
    var inputval = document.getElementById('input' + nId).value;
    // console.log("prod number " + nId + " is " + prodName);
    // console.log("prod price " + nId + " is " + prodPrice);
    // console.log("input number " + nId + " is " + inputval);

    var data = {
        index: nId,
        pname: prodName,
        pprice: parseInt(prodPrice.substring(2)),
        pquant: parseInt(inputval),
    };

    $.ajax ({
        type: 'POST',
        url: '/activity_website/controllers/quantityupdate.php',
        data: data,
        success: (result) => {
            if(result == "updated") {
            console.log("Updated DB");
            } else {
                console.log(result);
            }
        }
    })
        

}

function removeFromCart(nId) {
    var nIndex = {
        index: nId,
    }
    $.ajax({
        type: 'POST',
        url: '/activity_website/controllers/remove_cart.php',
        data: nIndex,
        success: (result) => {
            if (result == "Removed") {
                alert("Removed item from the cart!");
                cartfetch();
            } else {
                console.log(result);
            }
        }
    })

}

function placeOrder(nId) {

    var modTot = $('#cartTotal').html();
    // console.log(modTot);
    $('#modalTotal').val(modTot);
    $('#checkoutModal').modal('show');

    $('#paygcash').on('change', () => {
        $('#paymentchoice').val("GCASH")
        $('#paymentnotice').val("By choosing GCASH, you agree that upon pressing the purchase button, your GCASH account based on the number you entered will be charged for the due amount. If in case you have insufficient balance, your order will not be processed. For any concern regarding balance issues, please contact GCASH customer service.");
    })

    $('#paycod').on('change', () => {
        $('#paymentchoice').val("Cash on delivery")
        $('#paymentnotice').val("By choosing Cash on delivery, you agree that upon pressing the purchase button, on the date of your delivery our rider will demand the exact amount from the order receiver based on the address you entered. If in case the rider did not receive sufficient payment, your parcel will be not be released by our rider.")
    })

}

$('#purchase').on('click', () => {
    var nId = $("#xedni").val();
    var sAddress = $('#checkaddress').val();
    var iNumber = $('#checkNumber').val();
    var payMethod = $('#paymentchoice').val();


        // console.log(nId);
        // console.log(sAddress);
        // console.log(iNumber);
        // console.log(payMethod);
    var dataObj = {
        address: sAddress,
        contact: iNumber,
        payment: payMethod,
        nid: nId,
    };

    $.ajax({
        type: 'POST',
        url: "/activity_website/controllers/checkout.php",
        data: dataObj,
        success: (result) => {
            if (result == "Incomplete") {
                alert("Please fill out all fields!");
            } else if (result == "sent") {
                alert("Order Confirmed, Thank you!")
                $('#checkoutModal').modal('hide');
                cartfetch()
            } else {
                console.log(result);
                alert(result)
                $('#checkoutModal').modal('hide');
                cartfetch()
            }
        }
    });
})