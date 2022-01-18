<?php 
$title = "Switch Statement";   
   include 'include/header.php';
?>
<body>
    <h1>Switch Statement </h1>
    <?php 

echo "<hr/>";
    $grade = "E";
    switch($grade)
    {
        case 'A':
            echo "<h2 style ='color:blue'>You got A</h2>";
            break;
        case 'B':
            echo "<h2 style = 'color:green'>You got B</h2>";
            break;
        default:
            echo"<h2 style='color:red'>You have failed</h2>";
            break;
    } 

    echo "<hr/>";
    
    ?>
    
</body>
</html>