<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../../vendor/autoload.php';

    include("../../includes/db_connection.php");
    
    session_start();

    if ($dbConnection == true) {
        $aName = $_POST['adName'];
        $aUname = $_POST['adUname'];
        $aEmail = $_POST['adEmail'];  
        $aPosition = $_POST['adPosition'];
        $aPwd = substr(sha1(mt_rand()),17,12);

        
        if( $aName == "" || $aUname == "" || $aEmail == "" || $aPosition == "") {
            echo "Incomplete credentials";
            mysqli_close($dbConnection);
        } else { 
            try {
                $qSelect = "SELECT `Username` FROM `u955154186_db_djstrading`.`systemusers`  WHERE `Username` = '$aUname'";
                $eSelect = mysqli_query($dbConnection, $qSelect);
 
                $rows = mysqli_fetch_assoc($eSelect);
                $nTotalRows = mysqli_num_rows($eSelect);

                if ($rows['Username'] == $aUname || $nTotalRows > 0) {
                    echo "Admin already exist";
                    mysqli_close($dbConnection);
                } else {

                    $qInsert = "INSERT INTO `u955154186_db_djstrading`.`systemusers` 
                        (`UserFullName`, `Username`, `UserEmail`, `UserPosition`, `UserPassword` ,`DateGranted`) 
                        VALUES 
                        ('{$aName}', '{$aUname}', '{$aEmail}', '{$aPosition}', '{$aPwd}', '".date("Y-m-d H:i:s")."')";
        
                    $eInsert = mysqli_query($dbConnection, $qInsert);
                        $pathlink = getenv('HTTP_HOST');
                        if ($eInsert == true) {
                            echo "New Admin added!";

                            $mail = new PHPMailer();
                         
                            $mail->IsSMTP();
                           // $mail->SMTPDebug = 2;
                            $mail->SMTPAuth 	= true;
                        
                            $mail->Host 	  = 'smtp.hostinger.com';
                            include("../admin_ml_creds/admin_mail_creds.php");
                            $mail->FromName   = "Co-founder of the Merch";
                            $mail->SMTPSecure = 'ssl';
                            $mail->Port 	  = 465;                        
                            
                            $mail->AddCC("{$aEmail}", "{$aName}");
                        
                            $mail->Subject = "Granted Position of {$aPosition} Welcome to our Team!";
                            $mail->Body = nl2br("
                            You have been granted {$aPosition} Title in working with our team!
                            
                            Here are your Credentials. You may use it for logging in admin access!
                            Do not share your credentials to anyone other than you!
                        
                            Title grant: {$aPosition}
                            Full Name: {$aName}
                            Username: {$aUname}
                            Email: {$aEmail}
                            Password: {$aPwd}
                        
                            login here: https://{$pathlink}/admin/

                            ");
                            
                            $mail->IsHTML(true);
                            
                        
                            if(!$mail->Send()) {
                                echo  "unsent";
                            } else {
                                echo "sent";
                            }

                        } else {
                            echo 'Error: ' .$e->getMessage();
                        }

                        mysqli_close($dbConnection);
                }
            } catch(Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }

        }

    } else {
        echo "Connection Failed!";
    }