<?php  
$title = "If Else Statement";  
   include 'include/header.php';
?>
<body>
    <?php  
    
    echo "<h2> If statement </h2>";

    echo "<hr/>";
    $grade = 50;
    if($grade>= 40)
    {
        echo '<h3 style ="color:green"> You have passed </h3>';

    }
    else echo "<h3 stype='color:red'>You have failed</h3>";

    $grade = 'A';
    if($grade=='A')
    {
        echo "<h3 style= 'color:blue'>You got A grade!!!</h3>";
    }
    else if($grade =='B')
    {
        echo "<h3 style ='color:gray'>You did well</h3>";
    }
    else
    {
        echo "<h3 style ='color:red'>You are failed</h3>";
    }
    echo "<hr/>";

    ?>
    
</body>
</html>