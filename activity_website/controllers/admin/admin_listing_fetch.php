<?php
    include("../../includes/db_connection.php");

    $qSelect = "SELECT * FROM $dbDatabase .`products` WHERE `DateArchived` IS NULL ORDER BY `ProductId` ASC"; // query for selecting record
    $eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

    if ($eSelect == true) {
        $adLPCode = "
                <table class='table table-striped table-hover'>
                    <tr>
                        <th style='display:none'>Product ID</th>  
                        <th>Product Code</th>
                        <th>Product Name</th>    
                        <th style='display:none'>Product Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
            ";
        while($rows = mysqli_fetch_array($eSelect)) {

            $adLPCode .= "<tr>
                    <td style='display:none'>".$rows['ProductId']."</td>
                    <td>".$rows['ProductCode']."</td>
                    <td>".$rows['ProductName']."</td>
                    <td class='prod_desc'>".$rows['ProductDescription']."</td>
                    <td>".$rows['ProductPrice']."</td>
                    <td>".$rows['ProductQuantity']."</td>
                    <td>
                        <button class='btn btn-info' onclick=modify('".$rows['ProductId']."')>Modify</button>&nbsp;
                        <button class='btn btn-danger' onclick=archive('".$rows['ProductId']."')>Archive</button>
                    </td>
                ";
        }

        $adLPCode .= "</table>";
        
        echo $adLPCode;
    } else {
        echo "Failed to show all product, please shout to the developers!";
    }