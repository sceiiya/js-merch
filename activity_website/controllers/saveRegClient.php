<?php

    include("../includes/db_connection.php");
    
    session_start();

    if ($dbConn == true) {
        $sFullname = $_POST['fullname'];  
        $sUsername = $_POST['username'];
        $sEmail = $_POST['email'];
        $sPassword = $_POST['password'];
        $OTP = rand(1000, 9999);
        
        if( $sFullname == "" || $sEmail == "" || $sUsername == "" || $sPassword == "" ) {
            echo "Failed to Process";
        } else { 

            try {
                $qInsert = "INSERT INTO `u955154186_db_djstrading`.`clients` 
                    (`ClientFullName`, `ClientUsername`, `ClientEmail`, `ClientPassword`, `ClientOTP`, `date_added`) 
                    VALUES 
                    ('".$sFullname."', '{$sUsername}', '{$sEmail}', '{$sPassword}', '{$OTP}', '".date("Y-m-d H:i:s")."')";
    
                $eInsert = mysqli_query($dbConn, $qInsert);
                
                    if ($eInsert == true) {
                        $_SESSION['usernamereg'] = $sUsername;
                        $_SESSION['emailreg'] = $sEmail;
                        echo "Record successfully saved!";
                    } else {
                        echo "Failed to process, please call system administrator!";
                    }

                    mysqli_close($dbConn);
            } catch(Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }

        }

    } else {
        echo "Connection Failed!";
    }