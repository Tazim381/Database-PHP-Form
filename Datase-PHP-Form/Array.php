<?php 
$title = "Array";   
   include 'include/header.php';
?>
<body>
    <h1>Array </h1>
    <?php 
    //variable
    $num = 10;
    //array
    $number = array(1,2,3,4,5,6,7,8,9);
    echo "<hr/>";
    echo $number[5];
    $size = count($number);
    echo "<p>Array size is : $size</p>";
    echo "Printing array ";
    echo '<br/>';
    //printing array
    for($count=0; $count<$size; $count++)
    {
       echo "$number[$count] ";
    }

    echo "<hr/>";
    ?>
</body>
</html>