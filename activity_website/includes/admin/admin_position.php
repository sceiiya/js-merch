<div id="access_identifier" style="display:none;">

</div>
<?php
    $my_adUname = $_SESSION['username'];
    $my_adPass = $_SESSION['password'];
    $my_adPosition = $_SESSION['accesslevel'];
?>

echo $my_adUname;
echo $my_adPass;
echo $my_adPosition;

<script src="/activity_website/assets/js/admin_access_validation.js"></script>