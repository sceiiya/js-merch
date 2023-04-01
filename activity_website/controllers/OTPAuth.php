<?php
    include("../includes/db_connection.php");
    session_start();

    if(!isset($_SESSION['usernamereg'])){
        header('Location: /activity_website/controllers/register.php');
    }else{
        $sUsername = $_SESSION['usernamereg'];
        $sEmail = $_SESSION['emailreg'];
    }

    if ($dbConn == true) {
        $sOTP = $_POST['otp'];
        try {
            $qSelect = "SELECT `ClientOTP` FROM `u955154186_db_djstrading`.`clients` WHERE `ClientUsername` = '$sUsername' AND `ClientEmail` = '$sEmail'";
            $eSelect = mysqli_query($dbConn, $qSelect);
            $rows = mysqli_fetch_assoc($eSelect);
            $nTotalRows = mysqli_num_rows($eSelect);

            if ($nTotalRows > 0 && $rows['ClientOTP'] == $sOTP) {
                $qUpdate = "UPDATE `u955154186_db_djstrading`.`clients` SET `ClientStatus` = 'OTP Verified' WHERE `ClientUsername` = '{$sUsername}' AND `ClientOTP` =  '{$sOTP}'";
                $eUpdate = mysqli_query($dbConn, $qUpdate);
                echo "OTP Verified";
                mysqli_close($dbConn);
            }else{
                $qUpdate = "UPDATE `u955154186_db_djstrading`.`clients` SET `ClientStatus` = 'OTP Not Verified' WHERE `ClientUsername` = '{$sUsername}' AND `ClientEmail` =  '{$sEmail}'";
                $eUpdate = mysqli_query($dbConn, $qUpdate);
                echo "OTP Not Verified";
                mysqli_close($dbConn);
            }
        } catch(Exception $e) {
            echo "error";
        }
    } else {
        echo "Failed to connect, please call system administrator!";
    }