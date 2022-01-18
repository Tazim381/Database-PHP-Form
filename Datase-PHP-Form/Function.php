<?php 
   $title = "Function"; 
   include 'include/header.php';
?>
<body>
    <h1> Function </h1>
    <?php   
    
    function Name()
     {
        echo "This is Tazim";
    }

    echo "<hr/>";
    function addnumber($num1, $num2)
    {
        $sum = $num1+$num2;
        echo $sum;
    }

    
    
    Name();
    echo "<br/>";
    echo "Sum of those number is :";
    addnumber(12,20);
    
    echo "<hr/>";
    ?>
</body>
</html>