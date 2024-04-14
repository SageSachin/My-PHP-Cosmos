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

// create a database
$sql = "CREATE DATABASE dbsachin2";
$result = mysqli_query($conn,$sql);

// check if database creation is success
if($result)
{
    echo "DataBase was created successfully!<br>";
}
else
{
    echo "database was not created! ".mysqli_error($conn);
}
