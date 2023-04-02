<?php

    include("../includes/db_connection.php");
    
    session_start();

    if ($dbConnection == true) {
        $aUname = $_POST['username'];  
        $aPwd = $_POST['password'];
        
        if( $aUname == "" || $aPwd == "") {
            echo "Incomplete credentials!";
            mysqli_close($dbConnection);
        } else { 
            try {
                $qSelect = "SELECT * FROM `u955154186_db_djstrading`.`systemusers`  WHERE `Username` = '$aUname'";
                $eSelect = mysqli_query($dbConnection, $qSelect);
 
                // $rows = mysqli_fetch_assoc($eStatSelect);
                $rows = mysqli_fetch_assoc($eSelect);
                $nTotalRows = mysqli_num_rows($eSelect);

                // if ($rows['Username'] == $aUname || $nTotalRows > 0) {
                    if ($rows == null){
                        echo "forbidden access";
                    }elseif ($rows['Username'] != $aUname || $rows['UserPassword'] != $aPwd) {
                    // Username` = '$aUname' AND `UserPassword` = '$aPwd'
                        echo "forbidden access";
                        mysqli_close($dbConnection);
                        } elseif (($rows['Username'] == $aUname && $rows['UserPassword'] == $aPwd)){
                            echo 'Logged in succesfully!';
                            mysqli_close($dbConnection);
                        } else{
                            echo 'Error: ' .$e->getMessage();
                            mysqli_close($dbConnection);
                        }
            } catch(Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }

        }

    } else {
        echo "Connection Failed!";
    }