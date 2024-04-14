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

// Usage of WHERE Clause to update data
$sql="UPDATE `boy` SET `Name` = 'Shinchan' WHERE `boy`.`Roll No` = 3;";
$result=mysqli_query($conn,$sql);

if($result) {
    echo "Your data is updated";
}
else {
    echo "Updation failed..";
}
