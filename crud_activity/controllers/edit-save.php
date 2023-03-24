<?php

    include("../includes/db-connection.php");
    // include("../controllers/edit-selected.php");
    // echo "{$index}";
    if ($dbConn == true) {
        $index = $_POST['index'];
        $sFname = $_POST['fname']; 
        $sLname = $_POST['lname']; 
        $sEmail = $_POST['email']; 
        $nNumber = $_POST['number'];
        try {
            $qUpdate = "UPDATE `db_wd49p`.`tbl_registered` 
                SET `first_name`='{$sFname}', `last_name`='{$sLname}', `email`='{$sEmail}', `cellno`='{$nNumber}'
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


    