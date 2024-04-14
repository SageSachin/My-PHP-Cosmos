<?php
// Start the session and get the data.
session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ".$_SESSION['username'].".";
    echo "<br>";
    echo "Your favourite category is ".$_SESSION['favCat'].".";
    echo "<br>We have saved your session...";
}
else{
    echo "Please login to continue";
}
