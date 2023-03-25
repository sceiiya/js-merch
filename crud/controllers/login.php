<?php
    session_start();
    $_SESSION['username'] = $AdminSession;

    include("../includes/db-connection.php");

    $sUsername = $_POST['username'];
    $sPassword = md5($_POST['password']);

    $qSelect = "SELECT `username` = '{$sUsername}' AND `password` = '{$sPassword}' FROM `u955154186_mock_sceiiya`.`tbl_users` "; // query for selecting record
    // $qSelect = "SELECT * FROM `id`, `first_name`, `last_name`, `email`, `username`, `password` FROM `u955154186_mock_sceiiya`.`tbl_users` WHERE `id` = '{$index}'"; // query for selecting record
    $eSelect = mysqli_query($dbConn, $qSelect); // executing the query

    $rows = mysqli_fetch_assoc($eSelect);

    if ($eSelect == true) {    
        print_r ($rows);
    }else{
        echo "failed";
    }