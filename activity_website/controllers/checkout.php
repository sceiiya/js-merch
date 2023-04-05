<?php
include("../includes/db_connection.php");
include("../phpmailer/class.phpmailer.php");

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: /activity_website/login.php');
} else {
    $sUsername = $_SESSION['username'];
    $sClientId = $_SESSION['clientid'];
    $fullName = $_SESSION['fullname'];
    $email = $_SESSION['email'];
    $cartArray = $_SESSION['cartcontent'];
}

    // print_r($cartInfo);

if ($dbConnection == true) {
    $index = $_POST['nid'];
    $address = $_POST['address'];
    $contactNum = $_POST['contact'];
    $payMethod = $_POST['payment'];


    if ($address == "" || $address == "undefined" || $address == NULL || $contactNum == "" || $contactNum == "undefined" || $contactNum == NULL || $payMethod == "" || $payMethod == "undefined" || $payMethod == NULL) {
        echo "Incomplete";
        mysqli_close($dbConnection);
    } else {
        try {
            $dateTime = date("Y-m-d H:i:s");
            $qSelect = "UPDATE $dbDatabase .`clientcart` SET `DateRemoved` = '{$dateTime}' WHERE `ClientId` = '{$index}' AND `DateRemoved` IS NULL";
            $eSelect = mysqli_query($dbConnection, $qSelect);


            if ($eSelect == true) {

                $mail = new PHPMailer();

                $mail->IsSMTP();
               // $mail->SMTPDebug = 2;   
                $mail->SMTPAuth   = true;

                $mail->Host       = 'smtp.hostinger.com';
                include("admin_ml_creds/admin_mail_creds.php");
                $mail->FromName   = 'DJS Group';
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = 465;

                $mail->AddCC($email, $fullName);
                $mail->Subject = "ORDER CONFIRMED";
                $mail->Body = nl2br("
                    
                    Good day " . $fullName . ",

                    Your order has been received and will be processed for packaging within 24 hours.

                    Estimated time of delivery will be within 7 business days or may be longer depending on your location.

                    We will deliver you order to " . $address . ", and we will contact you through " . $contactNum . ".

                    Also, reminding you that you have selected as your payment method is through " . $payMethod . ".

                    Thank you for shopping with us.


                    Have a good day!
                    
                    ");

                $mail->IsHTML(true);

                if (!$mail->Send()) {
                    return "not sent";
                } else {
                    echo "sent";
                }


                mysqli_close($dbConnection);
            } else {
                echo "Failed to process, please call system administrator!";
                mysqli_close($dbConnection);
            }
        } catch (Exception $e) {
            echo "error";
            mysqli_close($dbConnection);
        }
    }
} else {
    echo "Failed to connect, please call system administrator!";
    mysqli_close($dbConnection);
}
