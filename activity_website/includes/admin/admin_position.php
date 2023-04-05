<input readonly id="access_identity" style="display:block; position:fixed; right:0; top:10px;">

</input>
<input readonly id="access_identifier" style="display:block; position:fixed; right:0; top: 40px;">

</input>

<button id="my_adminLogout" style="position:fixed; left:10px; bottom:8px; z-index:99;">Log out</button>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: /activity_website/admin/');
  } else {
    $aUname = $_SESSION['username'];
    $aPwd = $_SESSION['password'];
    $sPosition = $_SESSION['accesslevel'];
  }
?>