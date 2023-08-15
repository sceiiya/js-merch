<?php

    include("../../includes/db_connection.php");

    if ($dbConnection == true) {
        $index = $_POST['index'];

        $dateTime = date("Y-m-d H:i:s");
        $qUpdate = "UPDATE $dbDatabase .`products` SET `DateArchived` = '{$dateTime}' WHERE `ProductId` = '{$index}'";
        $eUpdate = mysqli_query($dbConnection, $qUpdate);

        if ($eUpdate == true) {
            echo "Modification successfully saved!";
        } else {
            echo "Failed to process, please call system administrator!";
         }
         
    } else {
        echo "Failed to connect, please call system administrator!";
    }