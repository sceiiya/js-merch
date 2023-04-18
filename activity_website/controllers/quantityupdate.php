<?php

include ("../includes/db_connection.php");

session_start();

        $sUsername = $_SESSION['username'];
        $sClientId = $_SESSION['clientid'];


if ($dbConnection == true) {
    $nIndex = $_POST['index'];
    $prodName = $_POST['pname'];
    $prodPrice = $_POST['pprice'];
    $prodQuant = $_POST['pquant'];

    try {
        $qUpdate = "UPDATE `u955154186_db_djstrading`.`productorders` 
        SET `ProductQuantity` = '$prodQuant' WHERE `ClientId` = '{$sClientId}' AND `ProductPrice` = '{$prodPrice}' AND `ProductName` = '{$prodName}'";

        $eUpdate = mysqli_query($dbConnection, $qUpdate);

        if ($eUpdate == true) {
            echo "updated";
        } else {
            echo "Failed to process, please call system administrator!";
            mysqli_close($dbConnection);
        }

    } catch(Exception $e) {
        echo 'Error: ' .$e->getMessage();
        mysqli_close($dbConnection);
    }
} else {
    echo "Failed to connect, please call system administrator!";
    mysqli_close($dbConnection);
}