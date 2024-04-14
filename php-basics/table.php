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
    echo "Connection was Successful!";
}

// create table in database
$sql="CREATE TABLE `girl` (`Roll No.` INT(11) NOT NULL AUTO_INCREMENT , `Course` VARCHAR(20) NOT NULL , `Name` VARCHAR(25) NOT NULL , `State` VARCHAR(20) NOT NULL , PRIMARY KEY (`Roll No.`))";
$result=mysqli_query($conn,$sql);

// check for table creation success
if($result){
    echo "table was created successfully!<br>";
}
else{
    echo "table was not created!!!";
}
