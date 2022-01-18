<?php
$conn = mysqli_connect("localhost", "root", "");

//create a database
$sql ="CREATE DATABASE Tanjum4";

$res = mysqli_query($conn,$sql);
if($res)
{
    echo "Connected    ";
}
else echo "not Connected";

?>