<?php
    include("../includes/db_connection.php");

    $qSelect = "SELECT * FROM $dbDatabase.`productorders` ORDER BY ProductName"; // query for selecting record
    $eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

    if ($eSelect == true) {
        $sHtml = "
                <table class='table table-striped table-hover'>
                    <tr>
                        <th>Product Name</th>    
                        <th>Product Code</th>
                        <th>Product Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
            ";
        while($rows = mysqli_fetch_array($eSelect)) {

            $sHtml .= "<tr>
                    <td>".$rows['ProductName']."</td>
                    <td>".$rows['ProductCode']."</td>
                    <td>".$rows['ProductDescription']."</td>
                    <td>".$rows['ProductPrice']."</td>
                    <td>".$rows['ProductQuantity']."</td>
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