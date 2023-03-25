<?php
    include("../includes/db-connection.php");
    session_start();

    if ($dbConn == true) {
        $sUsername = $_POST['username'];
        $sPassword = md5($_POST['password']);
        $_SESSION['username'] = $sUsername;
        try {
            $qSelect = "SELECT `password` FROM `u955154186_mock_sceiiya`.`tbl_users` WHERE `username` = '$sUsername'"; // query for selecting record
            // $qSelect = "SELECT * FROM `id`, `first_name`, `last_name`, `email`, `username`, `password` FROM `u955154186_mock_sceiiya`.`tbl_users` WHERE `id` = '{$index}'"; // query for selecting record
            $eSelect = mysqli_query($dbConn, $qSelect); // executing the query
            $rows = mysqli_fetch_assoc($eSelect);
            $nTotalRows = mysqli_num_rows($eSelect);

            if ($nTotalRows > 0 && $rows['password'] == $sPassword) {    
                echo "Login Success";
                mysqli_close($dbConn);
            }else{
                echo "Login Failed";
                mysqli_close($dbConn);
            }
        } catch(Exception $e) {
            echo "error";
        }
    } else {
        echo "Failed to connect, please call system administrator!";
    }