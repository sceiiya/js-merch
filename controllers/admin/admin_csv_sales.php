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

    $qSelect = "SELECT * FROM $dbDatabase .`productorders` "; // query for selecting record
    $eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

    if ($eSelect == true) {

        $nFile = fopen("../../csv_reports/sales.csv", "wa+");

        fwrite($nFile,"Product Code,Product Name,Price,Quantity,Payment,Date Ordered,Order Status\n");
        while($rows = mysqli_fetch_assoc($eSelect)){
            fwrite($nFile, '"'.$rows['ProductCode'].'","'.$rows['ProductName'].'","'.$rows['ProductPrice'].'","'.$rows['ProductQuantity'].'","'.$rows['PaymentMethod'].'","'.$rows['DateOrdered'].'","'.$rows['OrderStatus'].'"');
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

    $mail->Subject = "Merch Sales Report";
    $mail->Body = nl2br('
    This file is a report of our sales
    ');
    $mail->addAttachment("../../csv_reports/sales.csv");
    $mail->IsHTML(true);
    

    if(!$mail->Send()) {
        echo  "unsent";
    } else {
        echo "sent";
    }