<?php
session_start();

    if(!isset($_SESSION['username'])){
        header('Location: /activity_website/admin/');
    }else{
        // $adUname = $_SESSION['username'];
        try {
          $qSelect = "SELECT `Username` FROM `u955154186_db_djstrading`.`systemusers`  WHERE `Username` = '$aUname'";
          $eSelect = mysqli_query($dbConnection, $qSelect);

          $rows = mysqli_fetch_assoc($eSelect);
          $nTotalRows = mysqli_num_rows($eSelect);

          if ($eSelect == true) {
            $adUname = $rows['Username'];
            $aAccess = $rows['UserPosition']; 
              mysqli_close($dbConnection);
          } else {
            echo 'forbidden acess';
            mysqli_close($dbConnection); 
            }
        } catch(Exception $e) {
            echo 'Error: ' .$e->getMessage();
            mysqli_close($dbConnection);
        }
    }
  
?>