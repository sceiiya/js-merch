<?php

session_start();

    if(!isset($_SESSION['username'])){
        header('Location: /activity_website/login.php');
    }else{
        $sUsername = $_SESSION['username'];
        $sClientId = $_SESSION['clientid'];
        $fullName = $_SESSION['fullname'];
        $email = $_SESSION['email'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/activity_website/assets/css/styles.css">
    <title>Cart</title>

    <?php include("../activity_website/includes/client_header.php"); ?>

</head>

<body>

    <div class="cart-container cart-page" id="cart-cont">


    </div>



    <div class="modal" id="checkoutModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Checkout</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                <input id="xedni" value="<?php echo $sClientId; ?>" style="display: none;">
                    <div id="checkout-container" class="container">
                        <div class="container mt-3 row justify-content-center align-items-center">
                            <h2>Contact and Shipping Information</h2>
                            <form>
                                <div class="mb-3 mt-3 w-75">
                                    <label for="name">Full Name:</label>
                                    <input type="name" class="form-control" id="checkName" name="name" value="<?php echo $fullName; ?>">
                                </div>
                                <div class="mb-3 mt-3 w-75">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="checkEmail" name="email" value="<?php echo $email; ?>">
                                </div>
                                <div class="mb-3 w-75">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="checkaddress" placeholder="Enter Shipping Address" name="address">
                                </div>
                                <div class="mb-3 mt-3 w-75">
                                    <label for="number">Contact Number:</label>
                                    <input type="number" class="form-control" id="checkNumber" placeholder="Enter Contact Number" name="number">
                                </div>
                            </form>
                        </div>
                        <div class="container mt-3">
                            <h2>Payment Method</h2>
                            <form>

                                <div class="form-check mt-5">
                                    <input type="radio" class="form-check-input" id="paygcash" name="optradio" value="GCASH">
                                    <label class="form-check-label" for="paygcash">GCASH</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="paycod" name="optradio" value="Cash On Delivery">
                                    <label class="form-check-label" for="paycod">Cash On Delivery</label>
                                </div>
                                <fieldset disabled>
                                    <div class="mb-3 mt-3 w-50">
                                        <label for="paymentchoice">Payment Notice:</label>
                                        <textarea name="paymentnotice" id="paymentnotice" cols="30" rows="10" style="resize: none;"></textarea>
                                        <input type="text" class="form-control" id="paymentchoice" name="paymentchoice" style="display: none;">
                                    </div>
                                <fieldset>

                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <fieldset disabled>
                        <input type="text" class="form-control" id="modalTotal">
                    </fieldset>
                        <div class="">
                            <!-- <input class="btn btn-primary btn-lg" type="submit" value="Register" /> -->
                            <button class="btn btn-primary" id="purchase">Purchase</button>
                        </div>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script src="/activity_website/assets/js/jquery-3.6.3.min.js"></script>
<script src="/activity_website/assets/js/fetch.js"></script>
<script src="/activity_website/assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>