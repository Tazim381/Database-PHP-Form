<?php 

include ("connection.php");

if (isset($_SESSION["USER_NAME"])){
    echo "WELCOME ".$_SESSION["USER_NAME"];
} 

$query ="select * from employee";
$res = mysqli_query($conn,$query);



?>

<table border="2" >
    <tr>
     <th> SL</th>
    <th> Username</th>
    <th>Email</th>
    <th>Password</th>
    <th colspan="2">operations</th>
    </tr>
    <?php
    $i=1;
    while($row=mysqli_fetch_assoc($res))
    {
    ?>
        <tr>
        <td> <?php echo $i++?></td>
        <td> <?php echo $row['name']?></td>
        <td> <?php echo $row['email']?></td>
        <td> <?php echo $row['password']?></td>
        <td>Edit/update</td>
        <td>Delete</td>

        </tr>

    <?php
    }
    ?>
    
</table>