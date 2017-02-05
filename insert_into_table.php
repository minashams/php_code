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

//now we creat table
$sql = "INSERT INTO student (firstname, lastname, email)
VALUES ('mina', 'shams', 'minshams@stratford.com');";
$sql .= "INSERT INTO student (firstname, lastname, email)
VALUES ('amir', 'shams', 'amirshams@stratford.com');";
$sql .= "INSERT INTO student (firstname, lastname, email)
VALUES ('ali', 'shams', 'alishams@stratford.com');";
$sql .= "INSERT INTO student (firstname, lastname, email)
VALUES ('saman', 'shams', 'samanshams@stratford.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>