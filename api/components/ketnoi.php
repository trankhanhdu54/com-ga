<?php
$servername = "bzgj7qg3gbmwzm2nviqt-mysql.services.clever-cloud.com:3306;";
$database = "bzgj7qg3gbmwzm2nviqt";
$username = "u3wtkgjilyxcs5vo";
$password = "QJzjNS7xnHyy5AVZmOUu";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>