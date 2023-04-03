<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/activity_website/assets/css/styles.css">
    <title>Admin Dashboard</title>
</head>

<body class="admin_dashboard">

<?php include("../../includes/admin/admin_nav.php") ?>

<main class="admin_maincont">

<div class="sppinnermodal modal" style="display: none;">
<div class="containersp">
  <div class="outerringg">
    <div class="innerringg">
    </div>
  </div>
</div>
</div>

      <?php 

      try {
        echo $admincontent;
      } catch(Exception $e) {
        echo 'Error: ' .$e->getMessage();
    }
       ?>
</main>
<!-- Pills content -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="/activity_website/assets/js/adminListingScripts.js"></script>
<script src="/activity_website/assets/js/scripts.js"></script>
<script src="/activity_website/assets/js/dashboardscripts.js"></script>

</html>