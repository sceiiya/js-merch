<?php
    include("../includes/db-connection.php");

    $qSelect = "SELECT * FROM `db_wd49p`.`tbl_registered` ORDER BY id DESC"; // query for selecting record
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
                        <button class='btn btn-info'>Edit</button>&nbsp;
                        <button class='btn btn-danger' onclick=del('".$rows['id']."');>Delete</button>
                    </td>
                ";
        }

        $sHtml .= "</table>";
        echo $sHtml;
        
    } else {
        echo "Failed to process, please call system administrator!";
    }