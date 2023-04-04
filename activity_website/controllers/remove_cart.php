<?php

    include("../includes/db_connection.php");

    if ($dbConnection == true) {
        $index = $_POST['index'];

        $dateTime = date("Y-m-d H:i:s");
        $qUpdate = "UPDATE $dbDatabase .`clientcart` SET `DateRemoved` = '{$dateTime}' WHERE `CartId` = '{$index}'";
        $eUpdate = mysqli_query($dbConnection, $qUpdate);

        if ($eUpdate == true) {
            echo "Removed";
        } else {
            echo "Failed to process, please call system administrator!";
         }
         
    } else {
        echo "Failed to connect, please call system administrator!";
    }