<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "biomuta");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

$f_open = fopen('./myfiles/small.csv', "r");
$sql = '';
$i=1;
while($f_read = fgets($f_open)){
//$f_read = fgets($f_open);
//echo $f_read;
    
	$f_line = str_replace("\n", '', $f_read);
//echo $f_line;
	$array_of_each_line = explode("\t", $f_line);
//print_r($array_of_each_line) ;

//now we create table
	$sql = "INSERT INTO bio3 (
    MyIndex, 
    UniProt_AC, 
    Gene_Name, 
    Accession, 
    Genome_Position, 
    Position_N, 
    Ref_N, 
    Var_N,   
    Position_A, 
    Ref_A, 
    Var_A, 
    Polyphen_Pred, 
    PMID, 
    Cancer_Type, 
    Source, 
    function, 
    Status)VALUES('$array_of_each_line[0]', '$array_of_each_line[1]', '$array_of_each_line[2]', '$array_of_each_line[3]', '$array_of_each_line[4]', '$array_of_each_line[5]', '$array_of_each_line[6]', '$array_of_each_line[7]', '$array_of_each_line[8]', '$array_of_each_line[9]', '$array_of_each_line[10]', '$array_of_each_line[11]', '$array_of_each_line[12]', '$array_of_each_line[13]', '$array_of_each_line[14]', '$array_of_each_line[15]', '$array_of_each_line[16]');";
	if (mysqli_multi_query($conn, $sql)) {
    //echo $i;
    //echo "New records created successfully\n";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "this line is not good ".$i;
}
$i++;

}

//print($sql);
fclose($f_open);



mysqli_close($conn);
echo "\n\n";

?>