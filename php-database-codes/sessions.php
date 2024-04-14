<?php
// verify the user login info.
session_start();
$_SESSION['username']="Sachin";
$_SESSION['favCat']="Books";
echo "We have saved your session";
