<?php
// we will use MySqli extension
// connecting to database
$servername="localhost";
$username="root";
$password="";

// create connection
$conn=mysqli_connect($servername,$username,$password);

// die is connection is not succesful
if(!$conn)
{
    die("Sorry we failed to connect".mysqli_connect_error());
}
else
{
    echo "Connection was successful!";
}
