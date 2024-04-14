<?php
// Connecting to the database
$servername="localhost";
$username="root";
$password=""; // becoz we r using xampp in our computer hence no password

// create a connection
$conn = mysqli_connect($servername,$username,$password);

// Die if connection was not successful
if(!$conn)
{
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else
{
    echo "Connection was successful<br>";
}
