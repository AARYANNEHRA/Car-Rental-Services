<?php
$servername = "localhost";
$usename = "root";
$password = "";
$database = "aaryan";
$con = mysqli_connect($servername, $usename, $password, $database);
if (!$con) {
    echo "connection not done";
}
?>