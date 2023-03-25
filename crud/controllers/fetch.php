<?php
    include("../includes/db-connection.php");

    $qSelect = "SELECT * FROM `u955154186_mock_sceiiya`.`tbl_users` WHERE `date_archived` IS NULL ORDER BY id DESC"; // query for selecting record
    $eSelect = mysqli_query($dbConn, $qSelect); // executing the query

    if ($eSelect == true) {
        $nTotalRows = mysqli_num_rows($eSelect);
        $sHtml = "
                <table class='table table-striped table-hover'>
                    <tr>
                        <th class='data_head'>#</th>
                        <th class='data_head'>Username</th>    
                        <th class='data_head'>First Name</th>
                        <th class='data_head'>Last Name</th>
                        <th class='data_head'>Email</th>
                        <th class='data_head'>Account Created</th>
                        <th class='data_head'>Action</th>
                    </tr>
            ";
        while($rows = mysqli_fetch_array($eSelect)) {

            $sHtml .= "<tr>
                    <td>".$nTotalRows."</td>
                    <td>".$rows['username']."</td>
                    <td>".$rows['first_name']."</td>
                    <td>".$rows[2]."</td>
                    <td>".$rows[3]."</td>
                    <td>".$rows[6]."</td>
                    <td>
                    <button class='btn btn-info btn-primary' type='button' onclick=edit('".$rows['id']."')>Modify</button>&nbsp;
                        <button class='btn btn-danger' onclick=del('".$rows['id']."');>Archive</button>
                    </td>
                ";
                 $nTotalRows--;
        }

        $sHtml .= "</table>";
        echo $sHtml;
        mysqli_close($dbConn);
    } else {
        echo "Connection Failed!";
    }