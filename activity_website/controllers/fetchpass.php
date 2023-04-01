<?php

include("../includes/db_connection.php");
session_start();

    $sUsername = $_SESSION['username'];

    $qSelect = "SELECT `ClientPassword` FROM `u955154186_db_djstrading`.`clients` WHERE `ClientUsername` = '$sUsername'";
    $eSelect = mysqli_query($dbConnection, $qSelect);

    if($eSelect == true) {
        $rows = mysqli_fetch_assoc($eSelect);
        echo json_encode($rows);
    } else {
        echo "Failed to connect, please call system administrator!";
    }