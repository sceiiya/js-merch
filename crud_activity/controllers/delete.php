<?php

    include("../includes/db-connection.php");

    if ($dbConn == true) {
        $index = $_POST['index'];
        echo $index;

        $dateTime = date("Y-m-d H:i:s");
        $qUpdate = "UPDATE `db_wd49p`.`tbl_registered` SET `deleteddate` = '{$dateTime}' WHERE `id` = '{$index}'";
        $eUpdate = mysqli_query($dbConn, $qUpdate);

        if ($eUpdate == true) {
            echo "Record successfully saved!";

            $qSelect = "SELECT * FROM `db_wd49p`.`tbl_registered` WHERE `deleteddate` IS NULL ORDER BY id DESC"; // query for selecting record
            $eSelect = mysqli_query($dbConn, $qSelect); // executing the query

            if ($eSelect == true) {

                $sHtml = "
                    <table class='table table-striped table-hover'>
                        <tr>
                            <th>ID</th>    
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Registration Date</th>
                            <th>Action</th>
                        </tr>
                    ";
                while($rows = mysqli_fetch_array($eSelect)) {

                    $sHtml .= "<tr>
                            <td>".$rows['id']."</td>
                            <td>".$rows['first_name']."</td>
                            <td>".$rows[2]."</td>
                            <td>".$rows[3]."</td>
                            <td>".$rows['cellno']."</td>
                            <td>".$rows[5]."</td>
                            <td>
                                <button class='btn btn-info btn-primary' data-bs-toggle='modal' data-bs-target='#myModal' type='button' onclick=edit('".$rows['id']."')>Edit</button>&nbsp;
                                <button class='btn btn-danger' onclick=del('".$rows['id']."');>Delete</button>
                            </td>
                        ";
                }

                $sHtml .= "</table>";
                echo $sHtml;
            } else {
                echo "Failed to process, please call system administrator!";
            }

        } else {
            echo "Failed to process, please call system administrator!";
        }
    } else {
        echo "Failed to connect, please call system administrator!";
    }