<?php
    //REMOTE CONNECTION
    $dbHostName = "sql947.main-hosting.eu";
    $dbUsername = "u955154186_administrator";
    $dbPassword = "]fP7L@&b9N";
    $dbDatabase = "u955154186_db_djstrading";

    $dbConnection = mysqli_connect ($dbHostName,$dbUsername,$dbPassword);
    
    //For default time in database lets use this one here so no problem in all controllers
    date_default_timezone_set('Asia/Manila');