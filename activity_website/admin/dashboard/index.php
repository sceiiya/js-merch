<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/activity_website/assets/css/styles.css">
    <title>Admin access</title>
</head>

<body class="admin_dashboard">

<nav class="adminNav">

<!-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"> -->
    <!-- <img src="/animazooki/assets/img/animazooki-b.png" alt="Animazooki" style="max-height: 40px" class="mt-1 pb-1"
     width="40" height="32"> -->
    <span class="fs-4">DJS Admin</span>
    <br/><br/>
  <!-- </a> -->
  <hr>
  <br/>
  
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="/activity_website/admin/dashboard/" class="nav-link active" aria-current="page">
        Dashboard
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        Orders
      </a>
    </li>
    <li>
      <a href="/activity_website/admin/listing/" class="nav-link text-white">
        Products
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-white">
        Customers
      </a>
    </li>
  </ul>

<hr/>
  <div class="navic-cont-log-r px-2"> <!-- <i class="bi bi-moon"></i> -->
    <a class="nav-button" href="#"><i
        class="fas fa-user-circle mx-2 txt-light"></i></a>
</div>


</nav>

<main class="admin_maincont">

<div class="sppinnermodal modal" style="display: none;">
<div class="containersp">
  <div class="outerringg">
    <div class="innerringg">
    </div>
  </div>
</div>
</div>

<H1>THIS IS THE DASHBOARD</H1>
      <?php 
      // $admincontent = '';
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
<script src="/activity_website/assets/js/scripts.js"></script>
<script src="/activity_website/assets/js/dashboardscripts.js"></script>

</html>