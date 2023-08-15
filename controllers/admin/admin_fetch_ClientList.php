<?php
    include("../../includes/db_connection.php");

    $qSelect = "SELECT * FROM $dbDatabase .`clients` ORDER BY `ClientId` ASC"; // query for selecting record
    $eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

    if ($eSelect == true) {
        $adLPCode = "
                <table class='table table-striped table-hover'>
                    <tr>
                        <th style='display:none'>Client ID</th>  
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Email</th>    
                        <th>User Joined</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
            ";
        while($rows = mysqli_fetch_array($eSelect)) {

            $adLPCode .= "<tr>
                    <td style='display:none'>".$rows['ClientId']."</td>
                    <td>".$rows['ClientUsername']."</td>
                    <td>".$rows['ClientFullName']."</td>
                    <td>".$rows['ClientEmail']."</td>
                    <td>".$rows['date_added']."</td>
                    <td>".$rows['ClientStatus']."</td>
                    <td>
                        <button class='btn btn-info' onclick=activate('".$rows['ClientId']."')>Activate</button>&nbsp;
                        <button class='btn btn-danger' onclick=deactivate('".$rows['ClientId']."')>Deactivate</button>
                    </td>
                ";
        }

        $adLPCode .= "</table>";
        
        echo $adLPCode;
    } else {
        echo "Failed to show all product, please shout to the developers!";
    }