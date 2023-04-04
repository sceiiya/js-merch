<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/activity_website/assets/css/styles.css">
    <title>DJS</title>

    <?php include("../activity_website/includes/client_header.php"); ?>

</head>

<body>

    <div class="cart-container cart-page" id="cart-cont">



        <div class="total-price">

            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>600.00 Php</td>
                </tr>
                <tr>
                    <td>VAT</td>
                    <td>30.00 Php</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>630.00 Php</td>
                </tr>
            </table>
        </div>
        <div id="btnDiv">
            <button id="btn-purchase">Place Order</button>
        </div>
    </div>

</body>

</html>

<script src="/activity_website/assets/js/jquery-3.6.3.min.js"></script>
<script src="/activity_website/assets/js/fetch.js"></script>
<script src="/activity_website/assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>