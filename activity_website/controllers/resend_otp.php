<?php
    include('../phpmailer/class.phpmailer.php');
    include('../includes/db_connection.php');

    session_start();

    if(!isset($_SESSION['usernamereg'])){
        header('Location: /activity_website/register.php');
    }else{
        $sUsername = $_SESSION['usernamereg'];
        $sEmail = $_SESSION['emailreg'];
    }

    $qSelect = "SELECT `ClientOTP` FROM `u955154186_db_djstrading`.`clients` WHERE `ClientUsername` = '$sUsername' AND `ClientEmail` = '$sEmail'";
    $eSelect = mysqli_query($dbConnection, $qSelect);
    $rows = mysqli_fetch_assoc($eSelect);

    print_r($rows['ClientOTP']);

    $mail = new PHPMailer();
 
    $mail->IsSMTP();
    $mail->SMTPAuth 	= true;
	$mail->Host 	  = 'smtp.hostinger.com';
    include("admin_ml_creds/admin_mail_creds.php");
    $mail->FromName   = 'DJS Group';
	$mail->SMTPSecure = 'ssl';
	$mail->Port 	  = 465;

    $mail->AddAddress($sEmail, $sUsername);
    $mail->Subject = "OTP";
    $mail->Body = nl2br("Your OTP is " . $rows);			
    $mail->IsHTML(true);
    

    if(!$mail->Send()) {
        return "not sent";
    } else {
        echo "sent";
    }


    // sir jay pakipalitan yung credentials.. eto satin 
    //˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅˅
	// $mail->Host 	  = 'smtp.hostinger.com';
    // $mail->Username   = 'mock_merch@sceiiya.wd49p.com';
    // $mail->Password   = 'Sir!0uzlY_YoU-h@v3+tOZToP#!@';
    // $mail->From 	  = 'mock_merch@sceiiya.wd49p.com';
	// $mail->FromName   = "Test Sender from Sceii";
	// $mail->SMTPSecure = 'ssl';
	// $mail->Port 	  = 465;
    //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^



