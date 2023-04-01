<?php 

session_start();

session_destroy();
header('location: /activity_website/controllers/login.php');

