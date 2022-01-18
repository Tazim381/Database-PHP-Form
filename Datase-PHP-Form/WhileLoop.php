<?php
$title = "While Loop";    
   include 'include/header.php';
?>
<body>
    <h1 style ='color:aquamarine'> While Loop </h1>
    <?php 
    echo "<hr/>";
     $name = 10;
     while($name<=15)
     {
         echo "<p style = 'color:blue'>This is while loop</p>";
         $name++;
     }
     echo "<hr/>";
    ?>
</body>
</html>