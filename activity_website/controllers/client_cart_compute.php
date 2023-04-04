<?php

include ("../includes/db_connection.php");

session_start();

        $sUsername = $_SESSION['username'];
        $sClientId = $_SESSION['clientid'];


if ($dbConnection == true) {
    $nIndex = $_POST['index'];

    $qSelect = "SELECT `ProductPrice` FROM $dbDatabase .`clientcart` WHERE `ClientId` = '$sClientId' AND `DatePurchased` IS NULL ORDER BY `DateAdded` DESC";
    $eSelect = mysqli_query($dbConnection, $qSelect);

    $prices = array();
    while($rows = mysqli_fetch_assoc($eSelect)){
    
        $prices[] = $rows['ProductPrice'];
        
    }
    print_r(Json_encode($prices));

} else {
    echo "Failed to connect, please call system administrator!";
}