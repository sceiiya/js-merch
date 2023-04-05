<?php
    include("../includes/db_connection.php");
    
    session_start();

    if ($dbConnection == true) {
        $sFullname = $_POST['fullname'];  
        $sUsername = $_POST['username'];
        $sEmail = $_POST['email'];
        $sPassword = $_POST['password'];
        $OTP = rand(1000, 9999);
        
        if( $sFullname == "" || $sEmail == "" || $sUsername == "" || $sPassword == "" ) {
            echo "Incomplete fields";
            mysqli_close($dbConnection);
        } else { 
            try {
                $qSelect = "SELECT `ClientUsername` FROM `u955154186_db_djstrading`.`clients`  WHERE `ClientUsername` = '$sUsername'";
                $eSelect = mysqli_query($dbConnection, $qSelect);
                $rows = mysqli_fetch_assoc($eSelect);
                $nTotalRows = mysqli_num_rows($eSelect);


 



                    
                if ($rows['ClientUsername'] == $sUsername || $nTotalRows > 0) {

                    echo "Username used";
                    mysqli_close($dbConnection);
                } else {

                    $qInsert = "INSERT INTO `u955154186_db_djstrading`.`clients` 
                        (`ClientFullName`, `ClientUsername`, `ClientEmail`, `ClientPassword`, `ClientOTP`, `ClientStatus`, `date_added`) 
                        VALUES 
                        ('".$sFullname."', '{$sUsername}', '{$sEmail}', '{$sPassword}', '{$OTP}', 'inactive', '".date("Y-m-d H:i:s")."')";
        
                    $eInsert = mysqli_query($dbConnection, $qInsert);
                    
                        if ($eInsert == true) {
                            echo "Registered";
                            $_SESSION['usernamereg'] = $sUsername;
                            $_SESSION['emailreg'] = $sEmail;

                            require_once('../phpmailer/class.phpmailer.php');

                            $mail = new PHPMailer();
 
                            $mail->IsSMTP();
                            $mail->SMTPDebug = 2;
                            $mail->SMTPAuth   = true;

                            $mail->Host 	  = 'smtp.hostinger.com';
                            $mail->Username   = 'sceii@sceiiya.wd49p.com';
                            $mail->Password   = 'tHis_!s=for-testing987';
                            $mail->From 	  = 'sceii@sceiiya.wd49p.com';
                            $mail->FromName   = 'DJS Group';
                            $mail->SMTPSecure = 'ssl';
                            $mail->Port 	  = 465;

                            $mail->AddCC($sEmail, $sUsername);
                            $mail->Subject = "OTP";
                            $mail->Body = nl2br("
                            Your OTP is $OTP
                            ");			
                            $mail->IsHTML(true);


                            if(!$mail->Send()) {
                                echo 'Error: ' .$e->getMessage();
                            } else {
                                echo "sent";
                            }

                        } else {
                            echo "Failed to process, please call system administrator!";
                            mysqli_close($dbConnection);
                        }
                        
                }
            } catch(Exception $e) {
                echo 'Error: ' .$e->getMessage();
            }

        }

    } else {
        echo "Connection Failed!";
    }