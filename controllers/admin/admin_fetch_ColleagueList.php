<?php
    include("../../includes/db_connection.php");

    $qSelect = "SELECT * FROM $dbDatabase .`systemusers` ORDER BY `UserId` ASC"; // query for selecting record
    $eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

    if ($eSelect == true) {
        $adLPCode = "
                <table class='table table-striped table-hover'>
                    <tr>
                        <th style='display:none'>Admin ID</th>  
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Email</th>    
                        <th>Access Granted</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
            ";
        while($rows = mysqli_fetch_array($eSelect)) {

            $adLPCode .= "<tr>
                    <td style='display:none'>".$rows['UserId']."</td>
                    <td>".$rows['Username']."</td>
                    <td>".$rows['UserFullName']."</td>
                    <td>".$rows['UserEmail']."</td>
                    <td>".$rows['DateGranted']."</td>
                    <td>".$rows['Activity']."</td>
                    <td>
                        <button class='btn btn-info' onclick=activate('".$rows['UserId']."')>Activate</button>&nbsp;
                        <button class='btn btn-danger' onclick=deactivate('".$rows['UserId']."')>Deactivate</button>
                    </td>
                ";
        }

        $adLPCode .= "</table>";
        
        echo $adLPCode;
    } else {
        echo "Failed to show all product, please shout to the developers!";
    }