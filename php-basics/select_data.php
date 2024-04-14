<?php
// Connecting to the database
$servername="localhost";
$username="root";
$password=""; // becoz we r using xampp in our computer hence no password
$database="contacts";

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
$sql="SELECT * FROM `contacts`";
$result=mysqli_query($conn,$sql);

// find the number of records
$z=mysqli_num_rows($result);
echo "Number of Records present in "."[". $database."]"." database are $z";
echo "<br>";

// display rows returned by the sql query using var_dump
$num=mysqli_num_rows($result);
// for ($i=0; $i < $num; $i++) { 
//     echo var_dump(mysqli_fetch_assoc($result))."<br>";
// }

echo "<br>";

// display rows without var_dump function
// $row=mysqli_fetch_assoc($result);
while($row=mysqli_fetch_assoc($result)) { 
    echo $row['Sno'].". ".$row['Name']." ".$row['Email']." ".$row['Concern']." ".$row['dt'];
    echo "<br>";
}

/*
Above between two for() loops only one can be used at once since,
data in the database can be read only once from top to bottom.
*/
