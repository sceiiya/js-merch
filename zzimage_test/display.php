<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "db_wd49p";

$servername = "89.117.188.103";
$username = "u955154186_sceiiya";
$password = "6:TCgLPA4b|";
$dbname = "u955154186_mock_sceiiya";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get products from database
$sql = "SELECT * FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<img src='uploads/" . $row["image"] . "'><br>";
		echo $row["name"] . "<br><br>";
	}
} else {
	echo "No products found.";
}

$conn->close();
?>
