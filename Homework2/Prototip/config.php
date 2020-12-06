<?php
$servername = "DESKTOP-78FAVVK\TEST_INSTANCE";
$username = "DESKTOP-78FAVVK\borce";
$password = "";
$dbname = "dbKrushevoNaDlanka";



$dbConnection = mysqli_connect($servername, $username, $password, $dbname);

if (!$dbConnection) {
    echo("connection failed");
    die("Connection failed: " . mysqli_connect_error());
}



