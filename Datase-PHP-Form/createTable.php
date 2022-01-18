<?php 

$conn = mysqli_connect("localhost", "root","" ,"tanjum");
//create table
//"Create table tanjum1"
$sql = "CREATE TABLE `tanjum1` ( `Id` INT(10) NOT NULL , `Nam` VARCHAR(50) NOT NULL , `Dept` VARCHAR(50) NOT NULL )";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo "Connected    ";
}
else echo "not Connected";

?>

