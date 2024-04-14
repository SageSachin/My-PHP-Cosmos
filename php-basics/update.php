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
$sql="UPDATE `girl` SET `Name` = 'Shinchan' WHERE `girl`.`Roll No.` = 1";
$result=mysqli_query($conn,$sql);

if($result){
    echo "your data is updated..";
}
else{
    echo "your data is not updated..";
}
