<?php

    include("../includes/db_connection.php");
    
    session_start();

    if ($dbConnection == true) {
        $aName = $_POST['adName'];
        $aUname = $_POST['adUname'];
        $aEmail = $_POST['adEmail'];  
        $aPosition = $_POST['adPosition'];
        $aPwd = substr(sha1(mt_rand()),17,12);

        
        if( $aName == "" || $aUname == "" || $aEmail == "" || $aPosition == "") {
            echo "Incomplete credentials";
            mysqli_close($dbConnection);
        } else { 
            try {
                $qSelect = "SELECT `Username` FROM `u955154186_db_djstrading`.`systemusers`  WHERE `Username` = '$aUname'";
                $eSelect = mysqli_query($dbConnection, $qSelect);
 
                $rows = mysqli_fetch_assoc($eSelect);
                $nTotalRows = mysqli_num_rows($eSelect);

                if ($rows['Username'] == $aUname || $nTotalRows > 0) {
                    echo "Admin already exist";
                    mysqli_close($dbConnection);
                } else {

                    $qInsert = "INSERT INTO `u955154186_db_djstrading`.`systemusers` 
                        (`UserFullName`, `Username`, `UserEmail`, `UserPosition`, `UserPassword`) 
                        VALUES 
                        ('{$aName}', '{$aUname}', '{$aEmail}', '{$aPosition}', '{$aPwd}')";
        
                    $eInsert = mysqli_query($dbConnection, $qInsert);
                    
                        if ($eInsert == true) {
                            echo "New Admin added!";
                        } else {
                            echo 'Error: ' .$e->getMessage();
                        }

                        mysqli_close($dbConnection);
                }
            } catch(Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }

        }

    } else {
        echo "Connection Failed!";
    }