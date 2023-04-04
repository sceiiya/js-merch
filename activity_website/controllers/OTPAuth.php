<?php
    include("../includes/db_connection.php");
    session_start();

    if(!isset($_SESSION['usernamereg'])){
        header('Location: /activity_website/register.php');
    }else{
        $sUsername = $_SESSION['usernamereg'];
        $sEmail = $_SESSION['emailreg'];
    }

    if ($dbConnection == true) {
        $sOTP = $_POST['otp'];
        try {
            $qSelect = "SELECT `ClientOTP` FROM `u955154186_db_djstrading`.`clients` WHERE `ClientUsername` = '$sUsername' AND `ClientEmail` = '$sEmail'";
            $eSelect = mysqli_query($dbConnection, $qSelect);
            $rows = mysqli_fetch_assoc($eSelect);
            $nTotalRows = mysqli_num_rows($eSelect);

            if ($rows['ClientOTP'] == $sOTP) {
                $qUpdate = "UPDATE `u955154186_db_djstrading`.`clients` SET `ClientStatus` = 'active' WHERE `ClientUsername` = '{$sUsername}' AND `ClientOTP` =  '{$sOTP}'";
                $eUpdate = mysqli_query($dbConnection, $qUpdate);
                echo "OTP Verified";
                mysqli_close($dbConnection);
            }else{
                $qUpdate = "UPDATE `u955154186_db_djstrading`.`clients` SET `ClientStatus` = 'inactive' WHERE `ClientUsername` = '{$sUsername}' AND `ClientEmail` =  '{$sEmail}'";
                $eUpdate = mysqli_query($dbConnection, $qUpdate);
                echo "OTP Not Verified";
                mysqli_close($dbConnection);
            }
        } catch(Exception $e) {
            echo "error";
        }
    } else {
        echo "Failed to connect, please call system administrator!";
    }