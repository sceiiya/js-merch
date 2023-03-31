<?php
    include("../includes/db-connection.php");
    session_start();

    if ($dbConn == true) {
        $sUsername = $_POST['username'];
        $sPassword = $_POST['password'];

        try {
            $qStatSelect = "SELECT `ClientStatus` FROM `u955154186_db_djstrading`.`clients` WHERE `ClientUsername` = '$sUsername' AND `ClientPassword` = '$sPassword'";
            $eStatSelect = mysqli_query($dbConn, $qStatSelect);
            $rows = mysqli_fetch_assoc($eStatSelect);

            if ($rows['ClientStatus'] == "OTP Verified") {
                $qSelect = "SELECT `ClientPassword` FROM `u955154186_db_djstrading`.`clients` WHERE `ClientUsername` = '$sUsername'";
                $eSelect = mysqli_query($dbConn, $qSelect);
                $rows2 = mysqli_fetch_assoc($eSelect);
                $nTotalRows = mysqli_num_rows($eSelect);

                if ($nTotalRows > 0 && $rows2['ClientPassword'] == $sPassword) {
                    $_SESSION['username'] = $sUsername;    
                    echo "Login Success";
                    mysqli_close($dbConn);
                }else{
                    echo "Login Failed";
                    mysqli_close($dbConn);
                }
            } else {
                echo "OTP Not Verified or incorrect credentials";
                mysqli_close($dbConn);
            }
        } catch(Exception $e) {
            echo "error";
        }
    } else {
        echo "Failed to connect, please call system administrator!";
    }