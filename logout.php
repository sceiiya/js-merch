<?php 

session_start();

session_destroy();
header('location: /activity_website/login.php');

