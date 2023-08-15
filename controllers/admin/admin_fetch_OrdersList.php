<?php
    include("../../includes/db_connection.php");

    $qSelect = "SELECT * FROM $dbDatabase .`productorders` ORDER BY `OrderId` ASC"; // query for selecting record
    $eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

    if ($eSelect == true) {
        $adLPCode = "
                <table class='table table-striped table-hover'>
                    <tr>
                        <th>Order ID</th>  
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Total Order</th>    
                        <th>Order Qty</th>
                        <th>Payment Method</th>
                        <th>Date Purchased</th>
                        <th>Status</th>
                    </tr>
            ";
        while($rows = mysqli_fetch_array($eSelect)) {

            $adLPCode .= "<tr>
                    <td>".$rows['OrderId']."</td>
                    <td>".$rows['ProductCode']."</td>
                    <td>".$rows['ProductName']."</td>
                    <td>".$rows['ProductPrice']."</td>
                    <td>".$rows['ProductQuantity']."</td>
                    <td>".$rows['PaymentMethod']."</td>
                    <td>".$rows['DateOrdered']."</td>
                    <td>".$rows['OrderStatus']."</td>
                ";
        }

        $adLPCode .= "</table>";
        
        echo $adLPCode;
    } else {
        echo "Failed to show all product, please shout to the developers!";
    }