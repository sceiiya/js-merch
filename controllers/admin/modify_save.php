<?php

include("../../includes/db_connection.php");

if ($dbConnection == true) {
    $index = $_POST['index'];
    $sPcode = $_POST['pcode'];
    $sPname = $_POST['pname'];
    $sPprice = $_POST['pprice'];
    $sPquantity = $_POST['pquantity'];
    $sPdescription = $_POST['pdescription'];
    $sPphoto = $_POST['pphoto'];

    if ($sPcode == "" || $sPname == "" || $sPprice == "" || $sPquantity == "" || $sPdescription == "" || $sPphoto == "") {
        echo "Incomplete, please fill out all fields.";
        
    } else {
        try {
            $dateTime = date("Y-m-d H:i:s");
            $qUpdate = "UPDATE $dbDatabase .`products` 
            SET `ProductCode` = '{$sPcode}', `ProductName` = '{$sPname}', `ProductPrice` = '{$sPprice}', `ProductQuantity` = '{$sPquantity}', `ProductDescription` = '{$sPdescription}', `ProductPhoto` = '{$sPphoto}', `DateModified` = '{$dateTime}'
            WHERE `ProductId` = '{$index}'
            ";

            $eUpdate = mysqli_query($dbConnection, $qUpdate);

            if ($eUpdate == true) {
                echo "updated";
                mysqli_close($dbConnection);
            } else {
                echo "Failed to update, please call system administrator!";
                mysqli_close($dbConnection);
            }
        } catch (Exception $e) {
            echo "error";
        }
    }
} else {
    echo "Failed to connect, please call system administrator!";
}
