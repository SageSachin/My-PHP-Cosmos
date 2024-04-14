<?php
// Connecting to the database
$servername="localhost";
$username="root";
$password=""; // becoz we r using xampp in our computer hence no password
$database="dbfirst";

// create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successful
if(!$conn)
{
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else
{
    echo "Connection was successful<br>";
}

// sql query to be executed
$sql="INSERT INTO `boy` (`Course`, `Name`, `State`) VALUES ('MBA', 'Utkarsh', 'TP')";
$result=mysqli_query($conn,$sql);

// adding new records
if($result)
{
    echo "Record was created successfully!<br>";
}
else
{
    echo "Record was not created! ".mysqli_error($conn);
}
