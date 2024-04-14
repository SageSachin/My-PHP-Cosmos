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
$sql="SELECT * FROM `boy` WHERE `State` = 'UP'";
$result=mysqli_query($conn,$sql);

// find the number of records
$z=mysqli_num_rows($result);
echo "Number of Records present in "."[". $database."]"." database are $z";
echo "<br>";

$num=1;

// display rows 
while($row=mysqli_fetch_assoc($result)) { 
    echo $num.". ".$row['Course']." ".$row['Name']." ".$row['State'];
    echo "<br>";
    $num++;
}
