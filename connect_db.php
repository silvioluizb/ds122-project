<?php
$servername = "gitlab.tadsufpr.net.br";
$username = "web1";
$password = "tads";
$dbname = "ds122_2021_especial_2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>