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
$sql="SELECT * FROM `girl` WHERE `State` = 'UP'";
$result=mysqli_query($conn,$sql);

// find the number of records in database
$z=mysqli_num_rows($result);
echo "Number of records present in "."[".$database."]"." database are $z";
echo "<br>";

// display rows
while($row=mysqli_fetch_assoc($result)){
    echo $row['Roll No.'].". ".$row['Course']." ".$row['Name']." ".$row['State'];
    echo "<br>";
}
