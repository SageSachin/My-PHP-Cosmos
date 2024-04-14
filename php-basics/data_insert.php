<?php
// connection to database
$servername="localhost";
$username="root";
$password="";
$database="dbfirst";

// creating connection
$conn=mysqli_connect($servername,$username,$password,$database);

// die if connection failes
if(!$conn){
    die("Sorry we cant connect to database. ".mysqli_connect_error());
}
else{
    echo "Connection was Successful!<br>";
}

// create table in database
$sql="INSERT INTO `boy` (`Course`, `Name`, `Country`) VALUES ('ABC', 'Max', 'US')";
$result=mysqli_query($conn,$sql);

// check for table creation success
if($result){
    echo "table was created successfully!<br>";
}
else{
    echo "table was not created!!!";
}
