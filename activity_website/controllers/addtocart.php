<?php

include ("../includes/db_connection.php");

session_start();

        $sUsername = $_SESSION['username'];
        $sClientId = $_SESSION['clientid'];


if ($dbConnection == true) {
    $nIndex = $_POST['index'];

    try {

        // echo $sUsername;
        // echo $sClientId;
        // echo $nIndex;
        $qSelect = "SELECT `ProductCode`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductQuantity`, `ProductPhoto` FROM $dbDatabase .`products` WHERE `ProductId` = '{$nIndex}'";
        $eSelect = mysqli_query($dbConnection, $qSelect);
        $rows = mysqli_fetch_assoc($eSelect);


        $qInsert = "INSERT INTO `u955154186_db_djstrading`.`clientcart`
                (`ClientId`, `ProductCode`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductQuantity`, `DateAdded`, `ProductPhoto`) 
                VALUES 
                ('".$sClientId."', '".$rows['ProductCode']."', '".$rows['ProductName']."', '".$rows['ProductDescription']."', '".$rows['ProductPrice']."', '".$rows['ProductQuantity']."', '".date("Y-m-d H:i:s")."', '".$rows['ProductPhoto']."')";

        $eInsert = mysqli_query($dbConnection, $qInsert);

        $qOrderInsert = "INSERT INTO `u955154186_db_djstrading`.`products` 
        (`ProductCode`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductQuantity`, `PaymentMethod`, `DateOrdered`) 
        VALUES 
        ('".$rows['ProductCode']."', '".$rows['ProductName']."', '".$rows['ProductDescription']."', '".$rows['ProductPrice']."', NULL, NULL, '".date("Y-m-d H:i:s")."')";

        $eOrderInsert = mysqli_query($dbConnection, $qOrderInsert);

        if ($eInsert == true) {
            echo "Added to cart";
        } else {
            echo "Failed to process, please call system administrator!";
            mysqli_close($dbConnection);
        }

    } catch(Exception $e) {
        echo 'Error: ' .$e->getMessage();
    }
} else {
    echo "Failed to connect, please call system administrator!";
}