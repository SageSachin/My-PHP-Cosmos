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
$sql="DELETE FROM `boy` WHERE `boy`.`Roll No` = 5";
$result=mysqli_query($conn,$sql);

// to show how many rows are being affected..
$aff=mysqli_affected_rows($conn);
echo "Number of rows affected are $aff<br>";

// check if record deleted..
if($result) {
    echo "Your record deleted successfully..";
}
else {
    echo "Your record deletion was not successfull..";
}

/*
$sql="DELETE FROM `boy` WHERE `boy`.`Roll No` = 5 LIMIT 2"; 
we can use the above statement to delete record upto certain limit as we want.
*/
