<?php

    include("../includes/db_connection.php");
    
    session_start();

    if ($dbConnection == true) {
        $Pcode = $_POST['code'];  
        $Pname = $_POST['name'];
        $Pprice = $_POST['price'];
        $Pqty = $_POST['qty'];
        $Pdesc = $_POST['description'];
        $Pimg = $_POST['image'];
        
        if( $Pcode == "" || $Pname == "" || $Pprice == "" || $Pqty == "" || $Pdesc == "") {
            echo "Incomplete product description";
            mysqli_close($dbConnection);
        } else { 
            try {
                // $qSelect = "SELECT `ProductName` FROM `u955154186_db_djstrading`.`products`  WHERE `ProductName` = '$Pname'";
                // $eSelect = mysqli_query($dbConnection, $qSelect);
 
                // $rows = mysqli_fetch_assoc($eStatSelect);
                // $nTotalRows = mysqli_num_rows($eSelect);

                // if ($rows['ProductName'] == $Pname || $nTotalRows > 0) {
                //     echo "Product Name already listed";
                //     mysqli_close($dbConnection);
                // } else {

                    $qInsert = "INSERT INTO `u955154186_db_djstrading`.`products` 
                        (`ProductCode`, `ProductName`, `ProductPrice`, `ProductQuantity`, `ProductDescription`, `ProductPhoto`) 
                        VALUES 
                        ('{$Pcode}', '{$Pname}', '{$Pprice}', '{$Pqty}', '{$Pdesc}', '{$Pimg}')";
        
                    $eInsert = mysqli_query($dbConnection, $qInsert);
                    
                        if ($eInsert == true) {
                            echo "Product Listed!";
                        } else {
                            echo "Failed Listing!";
                        }

                        mysqli_close($dbConnection);
                // }
            } catch(Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }

        }

    } else {
        echo "Connection Failed!";
    }