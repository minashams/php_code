<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
	echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

// Create database biomuta
	$sql = "CREATE DATABASE biomuta";
	if (mysqli_query($conn, $sql)) {
    echo "Database biomuta created successfully\n";
	} else {
    echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
