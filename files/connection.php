<?php
$server='localhost';
    $usern="root";
    $passwo="";
    $dbna="music";
    $conn=mysqli_connect($server,$usern,$passwo,$dbna);
    if(!$conn){
        echo "not connected";
    }
?>