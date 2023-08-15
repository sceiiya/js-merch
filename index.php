<?php

session_start();

    if(!isset($_SESSION['username'])){
        header('Location: /login.php');
    }else{
        $sUsername = $_SESSION['username'];
        $sClientId = $_SESSION['clientid'];
        $fullName = $_SESSION['fullname'];
        $email = $_SESSION['email'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>JS Merch</title>

    <?php include("../includes/client_header.php"); ?>

</head>

<body>
    <?php include("../includes/pass_modal.php");?>

    <h2>WELCOME <?php echo $sUsername;?>!</h2>

    <section class="content-cards-container">
        <div class="card-cont-attr">

        </div>
        
    </section>

</body>

</html>
<script src="/assets/js/jquery-3.6.3.min.js"></script>
<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>