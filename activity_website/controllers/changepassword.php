<?php

include("../includes/db_connection.php");
session_start();

    $sUsername = $_SESSION['username'];

    if ($dbConnection == true) {
        $sPassword = $_POST['password'];

        try {
            $qUpdate = "UPDATE `u955154186_db_djstrading`.`clients` 
                SET `ClientPassword` = '{$sPassword}'
                WHERE `ClientUsername` = '{$sUsername}'
            ";
            
            $eUpdate = mysqli_query($dbConnection, $qUpdate);

            if ($eUpdate == true) {
                echo "Password saved!";                
            } else {
                echo "Failed to process, please call system administrator!";
            }

        } catch(Exception $e) {
            echo "error";
        }

    } else {
        echo "Failed to connect, please call system administrator!";
    }