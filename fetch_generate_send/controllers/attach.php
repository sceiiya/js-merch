<?php

    include("../includes/db-connection.php");

    $qSelect = "SELECT * FROM `u955154186_mock_sceiiya`.`tbl_users` WHERE `date_archived` IS NULL"; // query for selecting record
    $eSelect = mysqli_query($dbConn, $qSelect); // executing the query

    if ($eSelect == true) {

        $nFile = fopen("../files/users.csv", "wa+");

        fwrite($nFile,"ID,First Name,Last Name,Email,Username,Date Added\n");
        while($rows = mysqli_fetch_assoc($eSelect)){
            fwrite($nFile, '"'.$rows['id'].'","'.$rows['first_name'].'","'.$rows['last_name'].'","'.$rows['username'].'","'.$rows['email'].'","'.$rows['date_added'].'"');
            fwrite($nFile, "\n");
            }
            fclose($nFile);
        }else{
            echo "error";
        }

    include('../phpmailer/class.phpmailer.php');

// ipalit sa nasa baba
    $mail->Host 		= 'smtp.hostinger.com';
    $mail->Username 	= 'wd49p.main@wd49p.com';
    $mail->Password 	= 'Wd49PM@in';
    $mail->From 		= 'wd49p.main@wd49p.com';
    $mail->FromName 	= "DJS Merch";
    $mail->SMTPSecure 	= 'ssl';
    $mail->Port 		= 465;
// ipalit yung nasa baba

    $mail = new PHPMailer();
 
    $mail->IsSMTP();
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth 	= true;

    
    $mail->AddCC("meetscheidj@gmail.com", "Sceiiya Attach");

    $mail->Subject = "attach test(5?)";
    $mail->Body = nl2br('
    Web developers are professionals who specialize in creating websites and web applications.
    striving to improve their skills and knowledge to deliver exceptional results for their clients.
    ');
    $mail->addAttachment("../files/users.csv");
    $mail->IsHTML(true);
    

    if(!$mail->Send()) {
        echo  "unsent";
    } else {
        echo "sent";
    }

