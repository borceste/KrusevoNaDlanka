<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

//phpinfo();

//include "config.php";

$servername = "DESKTOP-78FAVVK\TEST_INSTANCE";
$username = "DESKTOP-78FAVVK\borce";
$password = "";
$dbname = "dbKrushevoNaDlanka";


//try {
//    $dbConnection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//} catch(PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}


$dbConnection = mysqli_connect($servername, $username, $password, $dbname);

if (!$dbConnection) {
    echo("connection failed");
    die("Connection failed: " . mysqli_connect_error());
}


$tableName = $_GET['tableName'];

echo $tableName;

$return_arr = array();

$query = "SELECT * FROM $tableName ORDER BY NAME";


$result = mysqli_query($dbConnection, $query);

while($row = mysqli_fetch_array($result)){
   $name = $row['name'];

   $return_arr[] = array(
                   "name" => $name,
                   );
}

// Encoding array in JSON format
echo json_encode($return_arr);


$dbConnection->close();
?>