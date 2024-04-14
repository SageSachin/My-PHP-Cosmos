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

// create a table in database
$sql="CREATE TABLE `boy` (`Roll No` INT(11) NOT NULL AUTO_INCREMENT , `Course` VARCHAR(12) NOT NULL , `Name` VARCHAR(12) NOT NULL , `State` VARCHAR(12) NOT NULL , PRIMARY KEY (`Roll No`))";
$result=mysqli_query($conn,$sql);

// cheack for table creation success
if($result)
{
    echo "Table was created successfully!<br>";
}
else
{
    echo "Table was not created! ".mysqli_error($conn);
}
