<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "biomuta");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made!". PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

	//create table and insert the column header
	$table = "CREATE TABLE bio3 (
	id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	MyIndex VARCHAR(30) NOT NULL, 
	UniProt_AC VARCHAR(30) NOT NULL,
	Gene_Name VARCHAR(30) NOT NULL,
	Accession VARCHAR(30) NOT NULL,
	Genome_Position VARCHAR(50) NOT NULL,
	Position_N VARCHAR(30) NOT NULL,
	Ref_N VARCHAR(30) NOT NULL,
	Var_N VARCHAR(30) NOT NULL,
	Position_A VARCHAR(30) NOT NULL,
	Ref_A VARCHAR(30) NOT NULL,
	Var_A VARCHAR(30) NOT NULL,
	Polyphen_Pred VARCHAR(30) NOT NULL,
	PMID VARCHAR(30) NOT NULL,
	Cancer_Type VARCHAR(30) NOT NULL,
	Source VARCHAR(30) NOT NULL,
	function VARCHAR(30) NOT NULL,
	Status VARCHAR(30) NOT NULL

	)";
	if ($conn->query($table) === TRUE) {
    echo "Table bio3 created successfully\n";
	} else {
    echo "Error creating table: " . $conn->error;
	}

$conn->close();

 ?>
