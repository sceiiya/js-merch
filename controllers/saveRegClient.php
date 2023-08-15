<?php
    require_once("../includes/db_connection.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';

    session_start();
    try {

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
                $qSelect = "SELECT `ClientUsername` FROM `u955154186_db_djstrading`.`clients`  WHERE `ClientUsername` = '$sUsername'";
                $eSelect = mysqli_query($dbConnection, $qSelect);
                $rows = mysqli_fetch_assoc($eSelect);
                $nTotalRows = mysqli_num_rows($eSelect);

 
                if ($nTotalRows > 0) {

                    echo "Username used";
                    mysqli_close($dbConnection);
                } else {

                    $qInsert = "INSERT INTO `u955154186_db_djstrading`.`clients` (`ClientFullName`, `ClientUsername`, `ClientEmail`, `ClientPassword`, `ClientOTP`, `ClientStatus`, `date_added`) VALUES ('".$sFullname."', '{$sUsername}', '{$sEmail}', '{$sPassword}', '{$OTP}', 'inactive', '".date("Y-m-d H:i:s")."')";
                    $eInsert = mysqli_query($dbConnection, $qInsert);
                        $hostname = getenv('HTTP_HOST');
                        if ($eInsert == true) {
                            $_SESSION['usernamereg'] = $sUsername;
                            $_SESSION['emailreg'] = $sEmail;
			   
                            $mail = new PHPMailer();
 
                            $mail->IsSMTP();
                            // $mail->SMTPDebug = 2;
                            $mail->SMTPAuth   = true;

                            $mail->Host 	  = 'smtp.hostinger.com';

                            require_once("admin_ml_creds/admin_mail_creds.php");
                            $mail->FromName   = 'JS Group';
                            $mail->SMTPSecure = 'ssl';
                            $mail->Port 	  = 465;

                            $mail->AddCC($sEmail, $sUsername);
                            $mail->Subject = "New-User OTP code";
                            $mail->Body = nl2br("
                            Your OTP is $OTP

                            Click <a href='https://{$hostname}/saveRegClient.php'>here<a> to enter OTP 
                            ");			
                            $mail->IsHTML(true);


                            if(!$mail->Send()) {
                                echo "unsent";
                            } else {
                                echo "sent";
                            }

                        } else {
                            echo "Failed to process, please call system administrator!";
                            mysqli_close($dbConnection);
                        }
                        
                }
        }

    } else {
        echo "Connection Failed!";
    }
} catch(Exception $e) {
    echo 'Error: ' .$e->getMessage();
}