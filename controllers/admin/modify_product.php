<?php
include("../../includes/db_connection.php");

if ($dbConnection == true) {
    $index = $_POST['nid'];
    $qSelect = "SELECT `ProductCode`, `ProductName`, `ProductPrice`, `ProductQuantity`, `ProductDescription`, `ProductPhoto` FROM $dbDatabase .`products` WHERE `ProductId` = '{$index}'";
    $eSelect = mysqli_query($dbConnection, $qSelect);

    if ($eSelect == true) {
        $rows = mysqli_fetch_assoc($eSelect);

        echo json_encode($rows);
    } else {
        echo "Failed to process, please call system administrator!";
    }
} else {
    echo "Failed to connect, please call system administrator!";
}
