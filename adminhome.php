<?php
session_start();
include "files/header.php";
echo "<h1 id='myaccount'>My Account</h1><br>";
echo "<label>Username:".$_SESSION['Username']."</label><br>";
echo " ".$_SESSION['email'];
?>
