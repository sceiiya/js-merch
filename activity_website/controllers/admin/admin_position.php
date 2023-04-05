

<?php
    // $my_adPass = $_SESSION['password'];

  // Start the session
  session_start();

  if (!isset($_SESSION['username'])) {
    header('Location: /activity_website/admin/');
  } else {
    $my_adUname = $_SESSION['username'];
    $my_adPosition = $_SESSION['accesslevel'];
    $my_adEmail = $_SESSION["accessemail"];

    // $aUname = $_SESSION['username'];
    // $aPwd = $_SESSION['password'];
    // $sPosition = $_SESSION['accesslevel'];
  }
  // Retrieve the values from the session variables


  // Create a JSON object with the values
  $response = array(
    'adUname' => $my_adUname,
    'adPosition' => $my_adPosition,
    'adEmail' => $my_adEmail
  );

  // Set the content type header to JSON
//   header('Content-Type: application/json');

  // Return the response as a JSON string
  echo json_encode($response);

//   echo $my_adUname;
// // echo $my_adPass;
// echo $my_adPosition;
?>