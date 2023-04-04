<?php

    include("../../includes/db_connection.php");
    
    if ($dbConnection == true) {
        $Pimg = $_FILES['image'];
        $Pname = $_POST['name'];

        if($Pimg == "") {
            echo "no image";
            mysqli_close($dbConnection);
        } else { 
            try {
                    $ext = pathinfo($Pimg['name'], PATHINFO_EXTENSION);
                    $Pimgname = uniqid() . '.' . $ext;
                    move_uploaded_file($Pimg['tmp_name'], '../../admin/listing/product_img/' . $Pimgname);
        
                    $qInsert = "UPDATE `u955154186_db_djstrading`.`products` SET `ProductPhoto` = '$Pimgname' WHERE `ProductName` = '$Pname'";
        
                    $eInsert = mysqli_query($dbConnection, $qInsert);
                    
                        if ($eInsert == true) {
                            echo "Image Successfully Listed!";
                            mysqli_close($dbConnection);
                        } else {
                            echo "Failed Listing Image!";
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