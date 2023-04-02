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

// Get image and product name
$file = $_FILES['file'];
$product_name = $_POST['product_name'];

// Check if file is uploaded successfully
if (isset($file) && $file['error'] === UPLOAD_ERR_OK) {
	// Get file extension
	$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
	
	// Generate unique filename
	$filename = uniqid() . '.' . $ext;
	
	// Move file to server directory
	move_uploaded_file($file['tmp_name'], 'uploads/' . $filename);
	
	// Insert image and product name to database
	$sql = "INSERT INTO images (name, image) VALUES ('$product_name', '$filename')";
	if ($conn->query($sql) === TRUE) {
		echo "Product uploaded successfully!";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
} else {
	echo "Error uploading product!";
}

$conn->close();
?>
