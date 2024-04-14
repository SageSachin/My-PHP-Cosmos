<?php
// connection to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "eko";

// creating connection
$conn = mysqli_connect($servername, $username, $password, $database);

// die if connection failes
if (!$conn) {
    die ("Sorry we cant connect to database. " . mysqli_connect_error());
}
?>