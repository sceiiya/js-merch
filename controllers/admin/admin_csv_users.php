<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../../vendor/autoload.php';

    $adUname = $_POST['username'];
    $adEmail = $_POST['email'];

        //REMOTE CONNECTION
        $dbHostName = "sql947.main-hosting.eu";
        $dbUsername = "u955154186_administrator";
        $dbPassword = "Passw0rd";
        $dbDatabase = "u955154186_db_djstrading";
    
        $dbConnection = mysqli_connect ($dbHostName,$dbUsername,$dbPassword);
        
        //For default time in database lets use this one here so no problem in all controllers
        date_default_timezone_set('Asia/Manila');

    $qSelect = "SELECT * FROM $dbDatabase .`clients` "; // query for selecting record
    $eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

    if ($eSelect == true) {

        $nFile = fopen("../../csv_reports/userslist.csv", "wa+");

        fwrite($nFile,"Username,Name,Email,OTP used,Date Joined,Status\n");
        while($rows = mysqli_fetch_assoc($eSelect)){
            fwrite($nFile, '"'.$rows['ClientUsername'].'","'.$rows['ClientFullName'].'","'.$rows['ClientEmail'].'","'.$rows['ClientOTP'].'","'.$rows['date_added'].'","'.$rows['ClientStatus'].'"');
            fwrite($nFile, "\n");
            }
            fclose($nFile);
        }else{
            echo "error";
        }

    $mail = new PHPMailer();
 
    $mail->IsSMTP();
    // $mail->SMTPDebug = 2;
    $mail->SMTPAuth 	= true;

    $mail->Host 		= 'smtp.hostinger.com';
    include('../../controllers/admin_ml_creds/admin_mail_creds.php');
    $mail->SMTPSecure 	= 'ssl';
    $mail->Port 		= 465;

    
    $mail->AddCC("{$adEmail}", "{$adUname}");

    $mail->Subject = "User List Report";
    $mail->Body = nl2br('
    This file is a report of our clients
    ');
    $mail->addAttachment("../../csv_reports/userslist.csv");
    $mail->IsHTML(true);
    

    if(!$mail->Send()) {
        echo  "unsent";
    } else {
        echo "sent";
    }