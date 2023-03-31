<?php
    //REMOTE CONNECTION
    // $dbHostName = "sql947.main-hosting.eu";
    // $dbUsername = "u955154186_administrator";
    // $dbPassword = "Passw0rd";
    // $dbDatabase = "u955154186_db_djstrading";

    // $dbConnection = new mysqli ($dbHostName,$dbUsername,$dbPassword,$dbDatabase);

    // $dbConnection = new mysqli("sql947.main-hosting.eu","u955154186_administrator","Passw0rd","u955154186_db_djstrading");

    // if ($dbConnection == true) {
    //     echo "Successfully Connected to REMOTE DATABASE!";
    // } else {
    //     die ("Connection Failed to REMOTE DATABASE:");
    // }

      //LOCAL CONNECTION
    //   define ('DBLOCALHOST', 'localhost');
    //   define ('DBLOCALUSER', 'root');
    //   define ('DBLOCALPASS', '');
    //   define ('DBLOCALDATABASE', 'db_tripledee');
      //REMOTE CONNECTION
    //   define ('DBREMOTEHOST', 'sql947.main-hosting.eu');
    //   define ('DBREMOTEUSER', 'u955154186_admin');
    //   define ('DBREMOTEPASS', 'Passw0rd');
    //   define ('DBREMOTEDATABASE', 'u955154186_danielng');
  

  
      $dbHost = "sql947.main-hosting.eu";
    //   USING IP ADDRESS AS SERVER HOSTNAME
    //   $dbHost = "89.117.188.103";
      $dbUser = "u955154186_admin";
      $dbPass = "Passw0rd";
      $dbDatabase = "u955154186_danielng";
  
      $dbConnection = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
    //   $dbConnection = new mysqli(DBREMOTEHOST,DBREMOTEUSER,DBREMOTEPASS,DBREMOTEDATABASE);
  
      if ($dbConnection->connect_error) {
          die ("Connection Failed to REMOTE DATABASE:");
      } else {
          echo "Successfully Connected to REMOTE DATABASE!";
      }