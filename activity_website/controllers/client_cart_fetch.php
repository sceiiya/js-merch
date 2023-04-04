<?php
include("../includes/db_connection.php");

session_start();

$sUsername = $_SESSION['username'];
$sClientId = $_SESSION['clientid'];

$qSelect = "SELECT * FROM $dbDatabase .`clientcart` WHERE `ClientId` = '$sClientId' AND `DatePurchased` IS NULL ORDER BY `DateAdded` DESC";
$eSelect = mysqli_query($dbConnection, $qSelect);

if ($eSelect == true) {
    $sumQSelect = "SELECT `ProductPrice` FROM $dbDatabase .`clientcart` WHERE `ClientId` = '$sClientId' AND `DatePurchased` IS NULL ORDER BY `DateAdded` DESC";
    $sumESelect = mysqli_query($dbConnection, $sumQSelect);
    // $sumArray = mysqli_fetch_assoc($sumESelect);
    $sHtml = '
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            ';

    while ($rows = mysqli_fetch_array($eSelect)) {
        $price = $rows['ProductPrice'];
        $priceFormat = number_format($price);

        $sHtml .= '<tr>
                        <td>
                            <div class="cart-info">
                            <div class="cart_item-img-cont"><img class="cart_item-img-main" src="/activity_website/admin/listing/product_img/'.$rows['ProductPhoto'].'"></div>

                                <div>
                                    <p>'.$rows['ProductName'].'</p>
                                    <small>'.$rows['ProductDescription'].'</small>
                                    <br>
                                    <small>₱ '.$priceFormat.'</small>
                                    <br>
                                    <a href="#!" onclick="removeFromCart('.$rows['CartId'].')">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" id="input'.$rows['CartId'].'" onkeyup="compute('.$rows['CartId'].')" onchange="compute('.$rows['CartId'].')" value="1" min="1" max="'.$rows['ProductQuantity'].'"></td>
                        <td>₱ '.$priceFormat.'</td>
                    </tr>
                    ';
        }

    $pricesCount = 0;
    while($sumArray = mysqli_fetch_assoc($sumESelect)) {
        $pricesCount += array_sum($sumArray);
    }
    $pricesFormat = number_format($pricesCount);

    $sHtml .= '</table>
        
                <div class="total-price">

                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>₱ '.$pricesFormat.'</td>
                        </tr>
                        <tr>
                            <td>Discounts</td>
                            <td>₱ 0.00</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td id="cartTotal">₱ '.$pricesFormat.'</td>
                        </tr>
                    </table>
                </div>
                <div id="btnDiv">
                    <button id="btn-purchase">Place Order</button>
                </div>
                ';
    echo $sHtml;
    mysqli_close($dbConnection);
} else {
    echo "Failed to connect, please call system administrator!";
}
