<?php
	if(isset($_POST["bio"])){
			$html_query = $_POST["bio"];

			echo "thanks for uploading";
			
	}
	$html_query = 'brca1';
	//print($html_query);
	$conn = mysqli_connect("127.0.0.1", "root", "", "biomuta");

	if (!$conn) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	echo "Success: A proper connection to MySQL was made!". PHP_EOL;
	echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
	
	
	$query = "SELECT * FROM bio3 WHERE Gene_Name='".$html_query."'";
	$result = mysqli_query($conn, $query);
	
	$table = '<table>';
	$each_row = '';
	while($row = mysqli_fetch_assoc($result)) {
		$table .= '<tr>';
		foreach ($row as $each_row){
			$table .= '<td>'.$each_row.'</td>';

		}
		//print_r($row);
		$table .= '</tr>';
	    
	}
	$table .= '</table>';
	print $table;
	

	

	mysqli_close($conn);
?>
