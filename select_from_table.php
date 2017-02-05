<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "myDB");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

$sql = "SELECT id, firstname, lastname, email FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	print_r($row);
        //echo "<br>\n id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. $row["email"]. "<br>\n";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>