<?php

    include("../includes/db-connection.php");
    // include("../controllers/edit-selected.php");
    // echo "{$index}";
    if ($dbConn == true) {
        $index = $_POST['index'];
        $sFname = $_POST['fname']; 
        $sLname = $_POST['lname']; 
        $sEmail = $_POST['email']; 
        $sUsername = $_POST['username'];
        try {
            $qUpdate = "UPDATE `u955154186_mock_sceiiya`.`tbl_users` 
                SET `first_name`='{$sFname}', `last_name`='{$sLname}', `email`='{$sEmail}', `username`='{$sUsername}'
                WHERE `id` = '{$index}'
            ";
            
            $eUpdate = mysqli_query($dbConn, $qUpdate); //connection and query

            if ($eUpdate == true) {
                echo "Record successfully saved!";                
            } else {
                echo "Failed to process, please call system administrator!";
            }

        } catch(Exception $e) {
            echo "error";
        }

    } else {
        echo "Failed to connect, please call system administrator!";
    }


    