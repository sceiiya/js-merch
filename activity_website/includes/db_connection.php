<?php
    //REMOTE CONNECTION
    $dbHostName = "sql947.main-hosting.eu";
    $dbUsername = "u955154186_administrator";
    $dbPassword = "Passw0rd";
    $dbDatabase = "u955154186_db_djstrading";

    // $dbConnection = mysqli_connect($dbHostName,$dbUsername,$dbPassword,$dbDatabase);

    $dbConnection = mysqli_connect("sql947.main-hosting.eu","u955154186_administrator","Passw0rd","u955154186_db_djstrading");

    if ($dbConnection == true) {
        echo "Successfully Connected to REMOTE DATABASE!";
    } else {
        die ("Connection Failed to REMOTE DATABASE:" . $dbConnection.connect_error);
    }