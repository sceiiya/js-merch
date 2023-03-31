<?php

    include("../includes/db-connection.php");
    
    if ($dbConn == true) {
        $sFname = $_POST['fname']; 
        $sLname = $_POST['lname']; 
        $sEmail = $_POST['email']; 
        $nNumber = $_POST['number'];
        try {
            $qInsert = "INSERT INTO `db_wd49p`.`tbl_registered` 
                (`first_name`, `last_name`, `email`, `cellno`, `entrydate`) 
                VALUES 
                ('".$sFname."', '{$sLname}', '{$sEmail}', '{$nNumber}', '".date("Y-m-d H:i:s")."')
            ";
            
            $eInsert = mysqli_query($dbConn, $qInsert); //connection and query

            if ($eInsert == true) {
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


    