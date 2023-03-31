<?php
    include("../includes/db-connection.php");

    $index = $_POST['index'];
    $qSelect = "SELECT `id`, `first_name`, `last_name`, `email`, `username` FROM `u955154186_mock_sceiiya`.`tbl_users` WHERE `id` = '{$index}'"; // query for selecting record
    $eSelect = mysqli_query($dbConn, $qSelect); // executing the query

    if ($eSelect == true) {
        $rows = mysqli_fetch_array($eSelect);
        // print_r($rows);

        $nId = $rows['id'];
        $sFname = $rows['first_name'];
        $sLname = $rows['last_name'];
        $sEmail = $rows['email'];
        $sUsername = $rows['username'];

        $aData = array("{$nId}", "{$sFname}", "{$sLname}", "{$sEmail}", "{$sUsername}");
        $aDataJs = json_encode($aData);

        echo $aDataJs;
        
    } else {
        echo "Failed to process, please call system administrator!";
    }
