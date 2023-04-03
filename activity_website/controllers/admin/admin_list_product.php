<?php

    include("../../includes/db_connection.php");
    
    if ($dbConnection == true) {
        $Pcode = $_POST['code'];  
        $Pname = $_POST['name'];
        $Pprice = $_POST['price'];
        $Pqty = $_POST['qty'];
        $Pdesc = $_POST['description'];
        $Pimg = $_POST['image'];
        
        if( $Pcode == "" || $Pname == "" || $Pprice == "" || $Pqty == "" || $Pdesc == "" || $Pimg == "") {
            echo "Incomplete product description";
            mysqli_close($dbConnection);
        } else { 
            try {
                    // $ext = pathinfo($Pimg['name'], PATHINFO_EXTENSION);
                    // $filename = uniqid() . '.' . $ext;
                    // move_uploaded_file($Pimg['tmp_name'], '../admin/listing/product_img/' . $filename);

                    $qInsert = "INSERT INTO `u955154186_db_djstrading`.`products` 
                        (`ProductCode`, `ProductName`, `ProductPrice`, `ProductQuantity`, `ProductDescription`, `ProductPhoto`, `DateAdded`) 
                        VALUES 
                        ('{$Pcode}', '{$Pname}', '{$Pprice}', '{$Pqty}', '{$Pdesc}', '{$Pimg}','".date("Y-m-d H:i:s")."')";
        
                    $eInsert = mysqli_query($dbConnection, $qInsert);
                    
                        if ($eInsert == true) {
                            echo "Product Listed!";
                            mysqli_close($dbConnection);
                        } else {
                            echo "Failed Listing!";
                            mysqli_close($dbConnection);
                        }
                // }
            } catch(Exception $e) {
                echo 'Error: ' .$e->getMessage();
                mysqli_close($dbConnection);
            }

        }

    } else {
        echo "Connection Failed!";
    }