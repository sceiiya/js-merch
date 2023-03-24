
<?php
    //echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
    <?php include ("includes/navbar.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8"> DIV 8</div>
            <div class="col-md-4">
                <!-- SIDE BAR -->
                <?php include("includes/sidebar.php"); ?>

            </div>
        </div>
    </div>

    <!-- <button id="btnTest">Test</button> -->
</body>
</html>

<script src="assets/js/scripts.js"></script>