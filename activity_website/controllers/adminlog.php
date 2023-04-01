<?php

    include("../includes/db_connection.php");
    
    session_start();

    if ($dbConnection == true) {
        $aUname = $_POST['username'];  
        $aPwd = $_POST['password'];
        
        if( $aUsername == "" || $aPassword == "") {
            echo "Incomplete credentials";
            mysqli_close($dbConnection);
        } else { 
            try {
                $qSelect = "SELECT `Username` FROM `u955154186_db_djstrading`.`systemusers`  WHERE `Username` = '$aUname'";
                $eSelect = mysqli_query($dbConnection, $qSelect);
 
                // $rows = mysqli_fetch_assoc($eStatSelect);
                $rows = mysqli_fetch_assoc($eSelect);
                $nTotalRows = mysqli_num_rows($eSelect);

                if ($rows['Usernamee'] == $aUname || $nTotalRows > 0) {
                    echo "forbidden access";
                    mysqli_close($dbConnection);
                } elseif (($rows['UserPassword'] == $aPwd || $nTotalRows > 0)){

                    $qpSelect = "SELECT `UserPassword` FROM `u955154186_db_djstrading`.`systemusers`  WHERE `UserPassword` = '$aPwd'";
                    $epSelect = mysqli_query($dbConnection, $qpSelect);
     
                    // $rows = mysqli_fetch_assoc($eStatSelect);
                    $rows = mysqli_fetch_assoc($epSelect);
                    $nTotalRows = mysqli_num_rows($epSelect);
    
                        mysqli_close($dbConnection);
                }
            } catch(Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }

        }

    } else {
        echo "Connection Failed!";
    }